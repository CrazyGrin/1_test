<?php 
	class Image extends CI_Controller {
		public function thumb($time){

		$this->load->helper(array('url','form'));
		$this->load->library('session');

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
		        
		echo '<img src = "tempimages2/'.$time.'.jpg">';

		 }
	}