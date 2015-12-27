<?php
header("Content-Type:text/html;charset=utf-8");
include 'link.php';

$stmt = $dbh->query("SELECT id,name,address FROM navigation");

while(list($id,$name,$address) = $stmt->fetch(PDO::FETCH_NUM)) {
	echo '<a href="http://'.$address.'" style="text-decoration:none"><div style="color:#F0F8FF;height:64px;width:180px;background:rgb(0,0,255);font-size:25px;text-align:center;line-height:64px;float:left;margin-left:14px;margin-top:50px">'.$name.'<form method="GET" action="delete.php"><input type="submit" value="删除" name="submit'.$id.'"/></form></div></a>';

}

?>
