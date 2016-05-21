<?php
namespace Home\Controller;
use Think\Controller;
class AskController extends Controller {
    public function index(){
    	$name = session('nickname');
        if(empty($name)){
        	header("Location:/TP/index.php/login");
        	exit();
        }else{
            //查询是否有好友请求 
        	$nickname = session('nickname');
        	$data['nickname'] = $nickname;
        	$friend = M("friend");
        	$condition['f_nickname'] = $nickname;
        	$condition['fzt'] = 0;
        	$data['fnum'] = $friend->where($condition)->count();
            $data['res'] = $friend->where($condition)->select();

            $this->assign($data);
            $this->display('./Application/home/view/ask.html');

        }
    }

    //同意好友申请
    public function agree(){
        header("Content-type:text/html; charset=utf-8");
        $id = $_GET['id'];
        $f_nickname = $_GET['f_nickname'];
        $condition['id'] = $id;
        $sql = M('friend');
        $data['fzt'] = 1;
        $res = $sql->where($condition)->save($data);

        //如果不是自己加自己
        $nickname = session('nickname');
        if($f_nickname!=$nickname){
            $data['nickname'] = $nickname;
            $data['f_nickname'] = $f_nickname;
            $data['fzt'] = 1;
            $sql->add($data);
        }

        if($res){
            echo "<script type='text/javascript'> alert('已同意，你们现在开始可以尽情聊天了！'); location.href='/TP/index.php/ask.php'; </script>";
            exit();
        }
    }

    //拒绝好友申请
    public function refuse(){
        header("Content-type:text/html; charset=utf-8");
        $id = $_GET['id'];
        $sql = M('friend');
        $condition['id'] = $id;
        $res = $sql->where($condition)->delete();

        if($res){
            echo "<script type='text/javascript'> alert('已拒绝'); location.href='/TP/index.php/ask.php'; </script>";
            exit();
        }
    }

}