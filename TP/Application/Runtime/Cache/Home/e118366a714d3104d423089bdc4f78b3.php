<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<title>web聊天</title>
<link rel="stylesheet" href="bootstrap/css/buttons.css">

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	$(function(){
		$("#flist li").hover(function(){ 
			$(this).css("color","blue").css("cursor","pointer");
			$(this).siblings().css("color","#000")},function(){
				$(this).css("color","#000")}).click(function(){
					window.open("index.php/message?geter="+$(this).attr("title"),"webchat","width=600,height=600");});
	});

	function del_confirm(){
		if(confirm("是否确认？")){
			return true;
		}else{
			return false;
		}
	}
</script>
</head>

<body>
<?php
 echo "<a href='index.php'>".$nickname."</a>"; if($fnum>0){ echo "<span ><a href='index.php/ask' style='color:#c00'>&nbsp;您有(".$fnum.")条好友请求</span></a> 在线 <a href='index.php/exit'>退出登陆</a>"; }else{ echo " 在线 <a href='index.php/exit'> 退出登陆</a>"; } ?>
<div id="message">
				
	<hr/>
	<p><span style="font-weight:bold">好友列表</span>&nbsp;|&nbsp;<a href="index.php/addfriend.php">添加好友</a></p>
	<ul id="flist">
	<?php
 if($row<1){ echo "您还没有好友！<a href='index.php/addfriend.php'>添加好友</a>"; exit(); } echo "<table>"; foreach($fnum1 as $row){ echo "<tr>"; $f_nickname = $row['nickname']; echo "<td><li title='".$f_nickname."'>".$f_nickname; if($res1>0){ echo "<span style='color:red'>(有新消息)</span></li></td>"; }else{ echo "</li></td>"; } echo "<td>&nbsp;&nbsp;<a href='index.php/del?f_nickname=".$f_nickname."' class='button button-3d button-primary button-rounded' onclick='return del_confirm()'>删除</a>
			</td>"; echo "</tr>"; } echo "</table>"; ?>

	</ul>
	<hr />
</div>
</body>
</html>