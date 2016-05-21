<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>web聊天_添加好友</title>
<link href="/TP/css/main.css" type="text/css" rel="stylesheet" />
</head>
<body>
<P><a href="/TP/index.php">返回主页</a></P>
<hr />
<form action="/TP/index.php/Home/Addfriend/add" method="get">
对方的昵称：<input type="text" name="f_nickname" />
<input type="submit" value=" 添加 " name="sub" />
</form>
<hr />
<p>最新注册用户</p>
<div class="auto">
<?php
 foreach($list as $row){ echo "<li>".$row['nickname']."&nbsp;|&nbsp;<a href='/TP/index.php/Home/Addfriend/add?f_nickname=".$row['nickname']."'>添加好友</a></li>"; } ?>
</div>
<div class="pagelist">
　　<?php echo ($page); ?>
</div>
</body>
</html>