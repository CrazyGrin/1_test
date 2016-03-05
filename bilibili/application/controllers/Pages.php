<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
		    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
		        // Whoops, we don't have a page for that!
		        show_404();
		    }

		    $this->load->helper('url');
		    $this->load->library('parser');
		    $this->load->database();
		    $this->load->library('session');

		    //$query = $this->db->query('SELECT * FROM images WHERE id = 1');

		    $data['donghua'] = 22;
		    $data['bangumi'] = 23;
		    $data['music'] = 11;
		    //$data['video'] = 'index.php/video/100000';

		    /*foreach ($query->result() as $row)
			{
			    $data['title'] = $row->title;
			    $data['test'] = $row->path;
			}

			$config['image_library'] = 'gd2';
			$config['source_image'] = 'tempImages/'.$data['test'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']     = 240;
			$config['height']   = 150;
			$config['new_image'] = 'cover/'.$data['test'];
			$config['thumb_marker'] = '';

			$this->load->library('image_lib', $config);

			if ( ! file_exists(APPPATH.'/cover/'.$data['test'])){
				$this->image_lib->resize();
			}

			$data['test'] = 'cover/'.$data['test'];*/

		    $this->load->view('main/header', $data);
		    $this->load->view('pages/next');
		    $this->load->view('pages/'.$page, $data);
		    $this->load->view('main/footer', $data);

		}
	}