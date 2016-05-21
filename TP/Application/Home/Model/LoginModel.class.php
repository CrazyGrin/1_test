<?php
	namespace Home\Model;
	use Think\Model;
	class LoginModel extends Model{
	   	protected $_validate = array(
	     array('nickname','require','用户名不能为空！'),
	     array('password','require','密码不能为空！')    
	   );

	   /*	public function Check_Login($name) {
	   		if($name == 'nickname') {
	   			$name = $_POST['nickname'];
	   			$user = D("user");
	   			$userinfo = $user->where("nickname ='$name'")->find();
	   			if(empty($userinfo)) {
	   				return ture;
	   			} else {
	   				return false;
	   			}
	   		} else {
	   			$name = $_POST['nickname'];
	   			$password = $_POST['password'];
	   			$user = D("user");
	   			$userinfo = $user->where("nickname ='$name'")->find();
	   			if(!empty($userinfo)) {
	   				if($userinfo['passwd'] == $passwd){
		   				session('nickname',$name);
		   				session('password',$password);
		   				return false;
		   			}else{
		   				return true;
		   			}
	   			}
	   				   			
	   		}
	   	}*/
	}