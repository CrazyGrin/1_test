<?php
    namespace Home\Controller;
	use Think\Controller;
	//use Think\Model;
	class LoginController extends Controller {
	    public function index(){
	        $this->display('./Application/home/view/login.html'); 	
	    }

	    public function check(){
	    	header("Content-type: text/html; charset=utf-8");
	    		$username = $_POST['nickname'];
	    		$passwd = $_POST['password'];
	    		$user = M("user");
	    		$userinfo = $user->where("nickname ='$username'")->find();
	    		if(!empty($userinfo)){
	    			if($userinfo['password'] == md5($passwd)){
	    				session('nickname',$username);
		   				$this->assign("jumpUrl","/TP/index.php");
		   				$this->success('登陆成功！');
		   			}else{
		   				$this->assign("jumpUrl","/TP/index.php/login");
		   				$this->error('密码出错，请重新输入！');
		   			}
		   		}else{
		   			$this->assign("jumpUrl","TP/index.php/login");
		   			$this->error('用户名不存在！');
		   		}
	    		//$this->success('登陆成功', 'http://wwww.baidu.com');
	    }
	}
	