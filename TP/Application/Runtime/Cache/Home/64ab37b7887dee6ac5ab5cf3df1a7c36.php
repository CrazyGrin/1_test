<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>web聊天</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="bootstrap/css/buttons.css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
</script>
</head>

<body>
<?php
 echo "<a href='/TP/index.php'>".$nickname."</a>"; if($fnum>0){ echo "<span ><a href='/TP/index.php/ask' style='color:#c00'>&nbsp;您有(".$fnum.")条好友请求</span></a> 在线 <a href='/TP/index.php/exit.php'>退出登陆</a>"; }else{ echo " 在线 <a href='/TP/index.php/exit.php'> 退出登陆</a>"; } ?>
<div id="message">
				
	<hr/>
	<p><span style="font-weight:bold">好友请求</span></p>
	<?php
 if($fnum<1){ echo "暂时没有好友请求,你可以先去和别人搭讪哦~ <a href='/TP/index.php/addfriend'> 添加好友</a>"; exit(); } foreach($res as $row){ echo "<p style='float:left;margin-left:30px;'><span style='color:#00a;font-weight:bold;'>"; echo $row['nickname']."</span> 请求加为好友&nbsp;<a href='/TP/index.php/ask/agree?f_nickname="; echo $row['nickname']."&id=".$row['id']."'>同意并添加</a>&nbsp;<a href='/TP/index.php/ask/refuse?id=".$row['id']."'>拒绝</a></p>"; } ?>

</div>
</body>
</html>