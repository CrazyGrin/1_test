<?php
header("Content-Type:text/html;charset=utf-8");
include 'link.php';

$query = "INSERT INTO navigation (id,name,address) VALUES (:id,:name,:address)";
$stmt2 = $dbh->prepare($query);

$stmt2->bindParam(':id',$id);
$stmt2->bindParam(':name',$name);
$stmt2->bindParam(':address',$address);

if(isset($_POST['submit'])) {
	$id=NULL;
	$name=$_POST['addressName'];
	$address=$_POST['address'];
}

$stmt2->execute();
?>