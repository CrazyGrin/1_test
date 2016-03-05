<?php
	class Login extends CI_Controller{
		public function login1($page = 'login'){
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
		        // Whoops, we don't have a page for that!
		        show_404();
		    }

			$this->load->helper(array('url','form'));
			$this->load->database('bilibili');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->helper('captcha');

			$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_username_check',array(
				'required' => '不能为空'
				));
			$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_password_check',array(
				'required' => '密码不能为空'
				));
			$this->form_validation->set_rules('captcha','Captcha','trim|required|callback_code_check',array(
				'required' => '请输入验证码'
				));
			//当天时间戳
			$zero =strtotime(date('Y-m-d')) + 28800;

			$this->load->view('login/header');

			if ($this->form_validation->run() == FALSE) {
	            $this->load->view('pages/login');
	        } else {
	  			$sql = "SELECT * FROM userinformation WHERE id = ?";
				$query = $this->db->query($sql,$this->session->uid);
				foreach ($query->result() as $row) {
					$data = array (
						'id' => $row->id,
						'name' => $row->name,
						'password' => $row->password,
						'email' => $row->email,
						'phone' => $row->phone,
						'logintime' => $row->logintime,
						'disable' => $row->disable,
						'exp' => $row->exp,
						'coin' => $row->coin,
						'principle' => $row->principle
						);
				}
				if(strtotime($data['logintime']) < $zero && time() + 28800 >= $zero) {
					$data1 = array(
						'exp' => $data['exp'] + 8,
						'coin' => $data['coin'] + 1,
						'logintime' => date('Y-m-d H:i:s',time() + 28800),
						'principle' => $data['principle'] + 1 
						);
					if ($data1['principle'] == 101) {
						$data1['principle'] -=1;
					}
					$where = "id = ".$data['id'];
					$query = $this->db->update_string('userinformation',$data1,$where);
					$this->db->query($query);
				} else {
					$data1 = array('logintime' => date('Y-m-d H:i:s',time() + 28800));
					$where = "id = ".$data['id'];
					$query = $this->db->update_string('userinformation',$data1,$where);
					$this->db->query($query);
				}
				if($_POST['vehicle'] == 'on') {
					$this->session->set_userdata($data);
					$this->session->set_userdata('isLogin','1');
					header("Location:pages/view");
				} else {
					$this->session->set_userdata($data);
					$this->session->set_userdata('isLogin','1');
					header("Location:pages/view");
				}
	        }

			$this->load->view('login/footer');

		}

		public function username_check($str) {
			$sql = "SELECT phone,id,disable FROM userinformation WHERE phone = ?";
			$query = $this->db->query($sql,$str);
			foreach ($query->result() as $row) {
				if(empty($row->phone)) {
					$sql = "SELECT email,id,disable FROM userinformation WHERE email = ?";
					$query = $this->db->query($sql,$str);
					if(empty($row->email)) {
						$this->form_validation->set_message('username_check', '该用户不存在');
						return FALSE;
					} elseif($row->disable != 1) {
						$this->form_validation->set_message('username_check','改用户已被冻结，如有疑问请咨询管理员');
						return FALSE;
					} else {
						$this->session->set_userdata('uid',$row->id);
						return TRUE;
					}
				} elseif($row->disable != 1) {
					$this->form_validation->set_message('username_check','改用户已被冻结，如有疑问请咨询管理员');
					return FALSE;
					} else {
					$this->session->set_userdata('uid',$row->id);
					return TRUE;
				}
			}
		}

		public function password_check($str) {
			$sql = "SELECT password FROM userinformation WHERE id = ?";
			$query = $this->db->query($sql,$this->session->uid);
			foreach ($query->result() as $row) {
				if($row->password == $str) {
					return TRUE;
				} else {
					unset($_SESSION['uid']);
					$this->form_validation->set_message('password_check', '密码错误');
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