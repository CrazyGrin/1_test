<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
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
        	$condition['f_nickname']=$nickname;
        	$condition['fzt']=0;
        	$data['fnum']=$friend->where($condition)->count();

            //查询是否有好友
        	$condition['fzt']=1;
        	$data['fnum1']=$friend->where($condition)->select();
        	$data['row']=count($data['fnum1']);

            //判断是否有新信息
        	$message = M("message");
        	$f_nickname = $data['fnum1']['f_nickname'];
        	$condition1['sender'] = $f_nickname;
        	$condition1['geter'] = $nickname;
        	$condition1['mloop'] = 0;
        	$res = $message->where($condition1)->select();
            $data['res'] = $res;
        	$data['res1'] = count($res);

            //var_dump($data['res']);

        	$this->assign($data);
        	$this->display('./Application/home/view/index.html');
        }
        
    }
}