<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
<script type="text/javascript" src="/TP/js/jquery-1.7.2.min.js"></script>

</head>
<body>

<form action="/TP/index.php/Home/Regist/insert" method="post">
<table id="table1">
	<tr>
		<td class="td1">昵称：</td>
		<td><input type="text"  name="nickname" /> *</td>
	</tr>

	<tr>
		<td class="td1">密码：</td>
		<td><input type="password" name="password" /> *</td>
	</tr>

	<tr>
		<td class="td1">确认密码：</td>
		<td><input type="password" name="repassword" /> *</td>
	</tr>
	<tr>
		<td class="td1">性别：</td>
		<td><input type="radio" value='男' name="sex" checked="checked" />男  <input type="radio" value='女' name="sex" />女</td>
	</tr>
	<tr>
		<td class="td1">出生日期：</td>
		<td>
		<label>
		<select name="yyyy">
		<?php
 for($i=2016;$i>1916;$i--){ echo "<option value=".$i.">$i</option>"; } ?>
		</select>年 
		<select name="mm">
		<?php
 for($i=1;$i<=12;$i++){ echo "<option value=".$i.">$i</option>"; } ?>
		</select>月 
		<select name="dd">
		<?php
 for($i=1;$i<=31;$i++){ echo "<option value=".$i.">$i</option>"; } ?>
		</select>日 
		</label>
		</td>
	</tr>
	<tr>
	<td></td>
		<td>
		<p class="captcha" id="captcha-container"> 
		<input name="verify" width="110" height="50" class="captcha-text" placeholder="验证码" type="text">                  
  		<img width="110"  height="50" alt="验证码" src="<?php echo U('Home/regist/verify_c',array());?>" title="点击刷新" onclick="this.src=this.src+'?'+Math.random()"> 
  		</p>
  		</td>
		<td><input type="submit" value=" 注册 " id="submit" /></td>
	</tr> 
</table>
</form>

</body>
</html>