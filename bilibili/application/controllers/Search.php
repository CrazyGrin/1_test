<?php
	class Search extends CI_Controller{
		public function view($page = 'search'){
		    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
		        // Whoops, we don't have a page for that!
		        show_404();
		    }

		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('form_validation');

		$this->load->view('main/header1');
		$this->load->view('pages/search');
		$this->load->view('main/footer');
		    
		}

		public function all() {
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
		    $this->load->library('session');

		    if(empty($_GET['keyword'])){
		    	header("Location:all?keyword=130");
		    }

			$keyword = $_GET['keyword'];
			if(is_numeric($keyword)) {
				$this->load->database('bilibili');
				$sql = "SELECT * FROM video WHERE id = ?";
				$data['result'] = $this->db->query($sql,$keyword);
				foreach ($data['result']->result() as $row) {
					$config['image_library'] = 'gd2';
					$config['source_image'] = $row->cover;
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 160;
					$config['height'] = 100;
					$config['new_image'] = 'images/search_images/'.$row->id.'.jpg';
					$config['thumb_marker'] = '';

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$this->image_lib->clear(); 
				}
				$this->db->close('bilibili');
				$this->load->view('pages/search_result',$data);

			} else {
				/*$this->load->database('tag');

				$sql = "SELECT * FROM tag WHERE name LIKE '%$keyword%'";
				$result = $this->db->query($sql,$keyword);
				foreach ($result->result() as $row) {
					$sql ="SELECT av FROM $row->table_name";
				}
				$result1 = $this->db->query($sql);
				$av = array();
				foreach ($result1->result() as $key) {;
					array_push($av, $key->av);
				}

				$this->db->close('tag');
				$this->load->database('bilibili');

				for ($i=0; $i < count($av); $i++) { 
					$sql = "SELECT * FROM video WHERE id = ?";
					$data1 = $this->db->query($sql,$av[$i]);
					foreach ($data1->result() as $row) {
					$config['image_library'] = 'gd2';
					$config['source_image'] = $row->cover;
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 160;
					$config['height'] = 100;
					$config['new_image'] = 'images/search_images/'.$row->id.'.jpg';
					$config['thumb_marker'] = '';

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$this->image_lib->clear(); 
					}
				}

				$this->load->view('pages/search_result',$data);*/

			}
			
		}
	}