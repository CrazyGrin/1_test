<?php
	class Register extends CI_Controller{
		public function phone($page = 'phone'){
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
		        // Whoops, we don't have a page for that!
		        show_404();
		    }

			$this->load->helper(array('url','form'));
			$this->load->database('bilibili');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->helper('captcha');

			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|callback_username_check',array(
				'required' => '昵称不能小于3个字符',
				'min_length' => '昵称不能小于3个字符',
				'max_length' => '昵称不能大于30个字符'
				));
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]',array(
				'required' => '密码不能小于6个字符',
				'min_length' => '密码不能小于6个字符'
				));
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]',array(
				'required' => '密码不能小于6个字符',
				'matches' => '亲，两个密码不一样呢'
				));
			$this->form_validation->set_rules('phone','Phone','trim|required|numeric|exact_length[11]|callback_phone_check',array(
				'required' => '亲，看起来不像手机号呢',
				'numeric' => '亲，看起来不像手机号呢',
				'exact_length' => '亲，看起来不像手机号呢'
				));
			$this->form_validation->set_rules('captcha','Captcha','trim|required|callback_code_check',array(
				'required' => '请输入验证码'
				));

	        if ($this->form_validation->run() == FALSE) {
	            $this->load->view('pages/phone');
	        }
	        else {
	        	$data = array(
	        		'name' => $_POST['username'],
	        		'password' => $_POST['password'],
	        		'sex' => 0,
	        		'phone' => $_POST['phone'],
	        		'time' => date('Y-m-d H:i:s',time()),
	        		'disable' => 1,
	        		'exp' => 0,
	        		'coin' => 1,
	        		'principle' => 60
	        		);
	        	$query = $this->db->insert_string('userinformation', $data);
	        	$this->db->query($query);
	            header("Location:success");
	        }

			$this->load->view('login/footer');
		}

		public function mail($page = 'mail'){
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
		        // Whoops, we don't have a page for that!
		        show_404();
		    }

		    $this->load->helper(array('url','form'));
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->helper('captcha');

			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|callback_email_check',array(
				'valid_email' => '邮箱地址格式有误'
				));

			$this->load->view('login/header');

			if ($this->form_validation->run() == FALSE) {
	            $this->load->view('pages/mail');
	        }
	        else {
	            header("Location:pages/login");
	        }

			$this->load->view('login/footer');
		}

		public function success() {
			$this->load->helper('url');
			$this->load->database('bilibili');
			$this->load->library('form_validation');
			$this->load->library('session');

			header("Location:pages/login");

			//$this->load->view('login/header');
			//$this->load->view('pages/login');
			//$this->load->view('login/footer');
		}

		public function username_check($str) {
			$sql = "SELECT name FROM userinformation WHERE name = ?";
			$query = $this->db->query($sql,$str);
			foreach ($query->result() as $row) {
				if(empty($row->name)) {
					return TRUE;
				} else {
					$this->form_validation->set_message('username_check', '该昵称已被使用');
					return FALSE;
				}
			}
		}

		public function phone_check($str) {
			$sql = "SELECT phone FROM userinformation WHERE phone = ?";
			$query = $this->db->query($sql,$str);
			foreach ($query->result() as $row) {
				if(empty($row->phone)) {
					return TRUE;
				} else {
					$this->form_validation->set_message('phone_check', '该手机号已被注册');
					return FALSE;
				}
			}
		}

		public function email_check($str) {
			$sql = "SELECT email FROM userinformation WHERE email = ?";
			$query = $this->db->query($sql,$str);
			foreach ($query->result() as $row) {
				if(empty($row->email)) {
					return TRUE;
				} else {
					$this->form_validation->set_message('email_check', '该邮箱已被注册');
					return FALSE;
				}
			}
		}

		public function code_check($str) {
			if($this->session->code != $str) {
				$this->form_validation->set_message('code_check','验证码错误');
				return FALSE;
			} else {
				return TRUE;
			}
		}
	}