<?php
namespace Home\Controller;
use Think\Controller;
class DelController extends Controller {
    public function index(){
        header("Content-type:text/html; charset=utf-8");

    	$name = session('nickname');
        if(empty($name)){
        	header("Location:/TP/index.php/login");
        	exit();
        }else{
            $f_nickname = $_GET['f_nickname'];
            $condition['nickname'] = $name;
            $condition['f_nickname'] = $f_nickname;
            $sql = M('friend');
            $sql->where($condition)->delete();

            $condition['nickname'] = $f_nickname;
            $condition['f_nickname'] = $name;

            if($sql->where($condition)->delete()){
                echo "<script type='text/javascript'> alert('删除成功!'); location.href='/TP/index.php'; </script>";
            }else{
                echo "<script type='text/javascript'> alert('你好像没有此好友哦!'); location.href='/TP/index.php'; </script>";
            }
        }
    }
}