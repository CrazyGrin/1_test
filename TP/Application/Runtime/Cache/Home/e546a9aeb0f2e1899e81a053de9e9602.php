<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登陆</title>
</head>

<body>
用户登陆
<form method="post" action="/TP/index.php/Home/Login/check">
<p>昵称：<input type="text" value="" name="nickname" /></p>
<p>密码：<input type="password" value="" name="password" /></p>
<p><input type="submit" name="submit" value="登陆 "/>&nbsp;&nbsp;<a href='/TP/index.php/regist' target='_parent'>注册</a></p>
</form>
</body>
</html>