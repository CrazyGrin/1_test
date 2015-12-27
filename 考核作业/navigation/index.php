<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>添加你所爱的网站吧</title>
</head>
<body onUnload="opener.location.reload()">
    <br>
    <h2 class="unit-title">每天不登不舒服斯基</h2>
    <form method="POST" action="">
        请输入网址名称：<input type="text" name="addressName" placeholder="如：百度"/>
        请输入网址:<input type="text" name="address" placeholder="如：www.baidu.com"/>
        <input type="submit" value="添加" name="submit"><br/>
    </form></br>

    
    <?php 
    if(isset($_POST['submit'])) {
      if(empty($_POST['addressName']) || empty($_POST['address'])) {
        echo '<script type="text/javascript">alert("请填写相关信息")</script>';
      } else {
        include 'input.php';
        }
    }?>

  <?php include 'output.php';?>
</body>

</html>