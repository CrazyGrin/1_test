<?php
	namespace Home\Model;
	use Think\Model;
	class UserModel extends Model{
	   	protected $_validate = array(
	     array('nickname','require','用户名必须不能为空'), // 用户名必须
	     array('nickname','','帐号名称已经存在！',1,'unique',1), // 验证用户名是否已经存在
	     array('password','3,12','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
	     array('repassword','password','确认密码不一致',0,'confirm'), //验证确认密码是否和密码一致     
	   );
	}