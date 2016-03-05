<?php 
	class thumb extends CI_Controller{
		public $path;
		public $newpath;
		public $width;
		public $height;
		public $av;
		public function __construct($path = '',$newpath = '',$width = '',$height = '',$av = '') {
			$this->path = $path;
			$this->newpath = $newpath;
			$this->width = $width;
			$this->height = $height;
			$this->av = $av;
		}

		public function thumb(){
			$config['image_library'] = 'gd2';
			$config['source_image'] = $this->path;
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width']     = $this->width;
			$config['height']   = $this->height;
			$config['new_image'] = $this->newpath.$av.'.jpg';
			$config['thumb_marker'] = '';

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

		}
	}