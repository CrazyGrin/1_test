<?php
header("Content-Type:text/html;charset=utf-8");
include 'link.php';

$query = "DELETE FROM navigation WHERE id=:id";
$stmt2 = $dbh->prepare($query);
$stmt = $dbh->query("SELECT id FROM navigation");

$stmt2->bindParam(':id',$id);

while(list($id) = $stmt->fetch(PDO::FETCH_NUM)) {
	if(isset($_GET['submit'.$id])) {
		$stmt2->execute();
		echo "<script>alert('删除成功！');location.replace(document.referrer);</script>";
	}
}
?>