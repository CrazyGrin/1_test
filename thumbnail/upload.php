<?php
header("Content-Type:text/html;charset=utf-8");
$allowtype = array("jpg","png","gif");
$size = 1000000;
$path = "./uploads";

if($_FILES['myfile']['error'] > 0){
	echo '上传错误！';
	switch ($_FILES['myfile']['error']) {
		case 1:
			die('大小超出');
			break;
		case 2:
		    die('大小超出');
		    break;
		case 3:
		    die('文件被部分上传');
		    break;
		case 4:
		    die('没有上传任何文件');
		    break;
		default: die('未知错误');
	}
}
$hz = array_pop(explode(".", $_FILES['myfile']['name']));
if(!in_array($hz, $allowtype)){
	die("不被允许文件");
}

if($_FILES['myfile']['size'] > $size){
	die("超过规定大小");
}

$filename = date("YmdHis").rand(100,999).".".$hz;
$type = $_FILES['myfile']['type'];

if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
	if(!move_uploaded_file($_FILES['myfile']['tmp_name'], $path.'/'.$filename)){
		die('问题');
	}
}else{
	die('问题：文件非法');
}

echo "文件上传成功";
?>