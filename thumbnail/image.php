<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
if (isset($_POST['submit'])) {
	if (strtoupper(trim($_POST['code'])) == $_SESSION["code"]) {
		echo "输入验证码成功！";
		include('upload.php');
		include('thumb.php');
	}else{
		echo "输入验证码错误！";
	}
}
?>