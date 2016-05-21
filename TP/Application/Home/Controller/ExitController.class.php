<?php
    namespace Home\Controller;
	use Think\Controller;
	class ExitController extends Controller {
	    public function index(){
	    	session("nickname",null);

	        $this->assign("jumpUrl","/TP/index.php");
		   	$this->success('登出成功！');
	    }
	}