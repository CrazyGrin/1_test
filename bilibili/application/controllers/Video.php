<?php
	class Video extends CI_Controller{
		public function play($AV){

		    $this->load->helper('url');
		    $this->load->database('bilibili');
		    $this->load->library('session');
		    $this->load->library('pagination');

		    $sql = "SELECT * FROM video WHERE id = ?";
		    $query = $this->db->query($sql,$AV);
		    foreach ($query->result() as $row) {
		    	$data = array(
		    		'id' => $row->id,
		    		'bgimage' => $row->cover,
		    		'url' => $row->path,
		    		'hot' => $row->hot
		    		);
		    }

		    $data1['hot'] = $data['hot'] + 1;
		    $where = 'id = '.$data['id'];
		    $sql = $this->db->update_string('video',$data1,$where);
		    $this->db->query($sql);

		    /*$sql = "SELECT * FROM comment_".$AV;
		    $query = $this->db->query($sql);
		    $num = count($query->result());

			$config['base_url'] = '';
			$config['total_rows'] = ceil($num/10);
			$config['per_page'] = 1;
			$config['num_links'] = 2;
			$config['page_query_string'] = TRUE;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '?per_page=1';
			$config['last_link'] = FALSE;

			$this->pagination->initialize($config);

			echo $this->pagination->create_links();

			if(empty($_GET['per_page'])) {
				$sql = "SELECT * FROM comment_".$AV." ORDER BY id DESC LIMIT 10";
				$query1 = $this->db->query($sql);
				foreach ($query1->result() as $row) {
			    	echo $row->uid.'<br>';
			    	echo $row->time.'<br>';
			    	echo $row->text.'<br>';
		    	} 
		    } else {
		    	if (!isset($_GET['per_page'])) {
			 	$_GET['per_page']=1;
				} 
				$startCount=$num-($_GET['per_page']+1)*10;
		    	$sql = "SELECT * FROM comment_".$AV." ORDER BY id DESC LIMIT $startCount,10";
		    	$query1 = $this->db->query($sql);
		    	foreach ($query1->result() as $row) {
			    	echo $row->uid.'<br>';
			    	echo $row->time.'<br>';
			    	echo $row->text.'<br>';
		    }*/

		    $this->load->view('main/header');
		    $this->load->view('pages/play',$data);
		    $this->load->view('main/footer');
		}
	}
