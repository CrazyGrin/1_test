<?php
	class Upload extends CI_Controller{
		public function upload1($page = 'upload'){
		    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
		        // Whoops, we don't have a page for that!
		        show_404();
		    }

		    $this->load->helper(array('url','form'));
		    $this->load->library('session');
		    $DB1 = $this->load->database('bilibili');
		    $DB2 = $this->load->database('tag',TRUE);
		    $DB3 = $this->load->database('bangumi',TRUE);
		    $this->load->library('form_validation');

		    if($this->session->isLogin !=1) {
		    	header("Location:login");
		    	exit();
		    }

		    $sql = "SELECT * FROM tag WHERE id BETWEEN 6 AND 48";
		    $data['todo_list'] = $DB2->query($sql);

	        if ($this->form_validation->run() == FALSE){
	        	$time = $this->session->uid;
		        $config_image = array(
		        	'upload_path' => './tempImages',
		        	'allowed_types' => 'jpg|png|bmp',
		        	'file_name' => $time.'.jpg',
		        	'overwrite' => TRUE,
		        	'max_size' => 2048,
		        	'max_width' => 0,
		        	'max_height' => 0,
		        	'remove_spaces' => TRUE
		        	);

		        $this->load->library('upload', $config_image);

		        $config['image_library'] = 'gd2';
				$config['source_image'] = 'tempImages/'.$time.'.jpg';
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				$config['width']     = 240;
				$config['height']   = 150;
				$config['new_image'] = 'tempImages2/'.$time.'.jpg';
				$config['thumb_marker'] = '';

				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
		        
		        if ( ! $this->upload->do_upload('imagefile')) {
		            //$this->load->view('upload');
		            $this->upload->display_errors('<p>', '</p>');
		        } else {
		        	$data['imgurl'] = 'tempimages2/'.$time.'.jpg';
		        	//echo '<img src = "tempimages2/'.$time.'.jpg">';
		        }
		    }

		    $this->load->view('login/header');
		    $this->load->view('pages/upload',$data);
		    $this->load->view('login/footer');
		}

		public function video() {
			$this->load->library('session');

			$config_video = array(
	        	'upload_path' => './tempVideo',
	        	'allowed_types' => 'mp4|avi|rmvb|3gp|flv',
	        	'file_name' => $this->session->uid,
	        	'overwrite' => TRUE,
	        	'max_size' => 0,
	        	'remove_spaces' => TRUE
	        	);
	        
	        $this->load->library('upload', $config_video);
	        $this->upload->do_upload('file2');
	        $data = $this->upload->data();
		    $this->session->set_userdata('file_name',$data['file_name']);
		    $this->session->set_userdata('file_ext',$data['file_ext']);
		}

		public function do_upload() {
			$this->load->helper(array('url','form'));
			$this->load->database('bilibili');
		    $this->db->reconnect();
		    $this->load->library('session');
		    $this->load->library('form_validation');

		    $this->form_validation->set_rules('title', 'Title', 'trim|required',array(
				'required' => '不能为空'
				));

		    $tag1 = explode(',', $_POST['tag']);
		    $tag_str = $this->getNeedBetween($_POST['title'],'【','】');
		    $tag2 = explode('/', $tag_str);
		    $tag3 = $_POST['vehicle'];
		    $tag = $tag1;
		    foreach ((array)$tag2 as $key) {
		    	array_push($tag, $key);
		    }
		    foreach ((array)$tag3 as $key) {
		    	array_push($tag, $key);
		    }
		    $name = $this->paichu("】",$_POST['title'],"l");

		    $data = array(
		    	'title' => $_POST['title'],
		    	'postime' => date('Y-m-d H:i:s',time() + 28800),
		    	'summary' => $_POST['summary'],
		    	'uid' => $this->session->uid,
		    	'pid' => $_POST['pid'],
		    	'remark' => $_POST['message'],
		    	'column' => $_POST['column'],
		    	'type' => $_POST['type'],
		    	//'stype' => $_POST['stype'],
		    	'comefrom' => $_POST['comefrom'],
		    	'audit' => 1,
		    	'hot' => 0,
		    	'commentNum' => 0
		    	);

		    $sql = $this->db->insert_string('video', $data);
	        $this->db->query($sql);
	        $id = $this->db->insert_id();
	        $this->db->close('bilibili');

	        if($_POST['column'] == 'bangumi') {
	        	$this->load->database('bangumi');
	        	$data['av'] = $id;
	        	$sql = $this->db->insert_string('bangumi_video', $data);
	        	$this->db->query($sql);
	        	if($_POST['type'] == 'series') {
	        		if(is_numeric($_POST['pid']) || $_POST['pid'] = 'ova' || $_POST['pid'] = 'OVA') {
	        			$sql = "SELECT * FROM bangumi_tag WHERE name LIKE '%$name%'";
	        			$query = $this->db->query($sql);
	        			if($query->num_rows() == 0) {
								$data1['name'] = $name;
								$query1 = $this->db->insert_string('bangumi_tag', $data1);
								$this->db->query($query1);
								$id1 = $this->db->insert_id();
								$data2['table_name'] = 'bangumi_'.$id1;
								$where = 'id='.$id1;
								$query2 = $this->db->update_string('bangumi_tag',$data2,$where);
								$this->db->query($query2);
								$sql = 'CREATE TABLE '.$data2['table_name'].'(id int NOT NULL AUTO_INCREMENT,
								PRIMARY KEY(id),
								av int(11),
								pid varchar(15),
								type varchar(255)
								)';
								$this->db->query($sql);
							} else {
								foreach ($query->result() as $row) {
									$data2['table_name'] = 'bangumi_'.$row->id;
										$sql = 'CREATE TABLE IF NOT EXISTS '.$data2['table_name'].'(id int NOT NULL AUTO_INCREMENT,
								PRIMARY KEY(id),
								av int(11),
								pid varchar(15),
								type varchar(255)
								)';
								$this->db->query($sql);
									
									$data3 = array(
										'av' => $id,
										'pid' => $_POST['pid']
										);
									$query1 = $this->db->insert_string($row->table,$data3);
									$this->db->query($query1);
								}
							}
	        		}
	        	}

	        }
	        $this->db->close('bangumi');

	        if ($this->form_validation->run() == TRUE){
		        if (0) {
		            $this->load->view('upload');
		        } else {
	        		$this->load->database('tag');
	        		$sql = "SELECT id,table_name,num FROM tag WHERE name = ?";
	        		for ($i=0; $i < count($tag); $i++) { 
	        			$query = $this->db->query($sql,$tag[$i]);
	        			if($query->num_rows() == 0) {
								$data4['name'] = strtoupper($tag[$i]);
								$data4['num'] = 1;
								$query1 = $this->db->insert_string('tag', $data4);
								$this->db->query($query1);
								$id1 = $this->db->insert_id();
								$data5['table_name'] = 'tag_'.$id1;
								$where = 'id='.$id1;
								$query1 = $this->db->update_string('tag',$data5,$where);
								$this->db->query($query1);
								$data6 = 'tag_'.$id1;
								$query1 = 'CREATE TABLE IF NOT EXISTS '.$data6.'(id int NOT NULL AUTO_INCREMENT,
								PRIMARY KEY(id),
								av int(11)
								)';
								$this->db->query($query1);
								$data7['av'] = $id;
								$query1 = $this->db->insert_string($data6, $data7);
								$this->db->query($query1);
							} else {
								foreach ($query->result() as $row) {
									$data4['num'] = $row->num + 1;
									$where = 'id='.$row->id;
									$query1 = $this->db->update_string('tag',$data4,$where);
									$this->db->query($query1);
									$query1 = 'CREATE TABLE IF NOT EXISTS '.$row->table_name.'(id int NOT NULL AUTO_INCREMENT,
								PRIMARY KEY(id),
								av int(11)
								)';
								$this->db->query($query1);
								$data7['av'] = $id;
								$query1 = $this->db->insert_string($row->table_name, $data7);
								$this->db->query($query1);
								}
							}
	        		}

					@ rename("tempImages/".$this->session->uid.".jpg", "cover/".$id.".jpg");
					@ rename("tempVideo/".$this->session->file_name, "video/".$id.$this->session->file_ext);

					$this->db->close('tag');
					$this->load->database('bilibili');

					$data8 = array(
						'cover' => "cover/".$id.".jpg" ,
						'path' => "video/".$id.$this->session->file_ext
						);
					$where = 'id = '.$id;
					$sql = $this->db->update_string('video',$data8,$where);
					$this->db->query($sql);

		            $this->load->view('pages/upload_success');
		        }
		    }
    	}

    	public function getNeedBetween($kw1,$mark1,$mark2) {
			$kw=$kw1;
			$kw='123'.$kw.'123';
			$st =stripos($kw,$mark1);
			$ed =stripos($kw,$mark2);
			if(($st==false||$ed==false)||$st>=$ed) {
				return 0;
			} else {
				$kw=substr($kw,($st+3),($ed-$st-3));
				return $kw;
			}
		}

		public function paichu($mub,$zhi,$a){
		    if(!$mub){
		        return "被替换的字符串不存在";
	        }
		    $mub = mb_convert_encoding($mub,'GB2312','UTF-8');
		    $zhi = mb_convert_encoding($zhi,'GB2312','UTF-8');
		    if($a==""){
		    	$last = str_replace($mub,"",$zhi);
		    }elseif($a=="r"){
		        $last = preg_replace("/[".$mub."]+[\d\D\w\W\s\S]*/","",$zhi);

		        }elseif($a=="l"){
		            $last = preg_replace("/[\d\D\w\W\s\S]*[".$mub."]+/","",$zhi);
		            }
		            $last = mb_convert_encoding($last,'UTF-8','GB2312'); 
		    return $last;
		}
	}