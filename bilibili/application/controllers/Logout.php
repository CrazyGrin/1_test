<?php
	class Logout extends CI_Controller{
		public function logout1(){
			$this->load->library('session');
			$this->session->unset_userdata('isLogin');
			header('Location:index');
		}
	}