<?php
	namespace Home\Controller;
	use Think\Controller;
	class RegistController extends Controller {
	    public function index(){
	    	
	        $this->display('./Application/home/view/regist.html');
	    }

	    public function insert() {
	    	$User = D("User");
	    	header("Content-type: text/html; charset=utf-8"); 

	    	$verify = I('param.verify','');  
			if(!$this->check_verify($verify)){  
			    $this->error("亲，验证码输错了哦！",$this->site_url,3);  
			}

	    	if($User->create()) {
	    		$data['nickname'] = $_POST['nickname'];
	    		$data['password'] = md5($_POST['password']);
	    		$data['sex'] = $_POST['sex'];
	    		$data['birthday'] = $_POST['yyyy']."-".$_POST['mm']."-".$_POST['dd'];
	    		$data['reg_time'] = time();
	    		$User->add($data);

	    		echo "恭喜！注册成功！！<p>马上<a href='/TP/index.php/login' target='_parent'>登陆</a></p>";
	    	} else{
	    		echo "<script type='text/javascript'> alert('对不起！注册失败！');history.back(); </script>";
	    	}
	    }

	    public function verify_c(){  
		    $Verify = new \Think\Verify();
		    $Verify->expire = 15;  
		    $Verify->fontSize = 18;  
		    $Verify->length   = 4;  
		    $Verify->useNoise = false;  
		    $Verify->codeSet = '0123456789';  
		    $Verify->imageW = 130;  
		    $Verify->imageH = 50;    
		    $Verify->entry();  
		}

		function check_verify($code, $id = ""){  
		    $verify = new \Think\Verify();  
		    return $verify->check($code, $id);  
		} 

	}