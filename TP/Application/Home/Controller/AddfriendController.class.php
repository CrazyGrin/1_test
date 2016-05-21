<?php
namespace Home\Controller;
use Think\Controller;
class AddfriendController extends Controller {
    public function index(){
    	$name = session('nickname');
        if(empty($name)){
        	header("Location:/TP/index.php/login");
        	exit();
        }else{
        	$user = M("user");
        	$map['nickname']=array('neq',$name);
        	$count = $user->where($map)->count(); 
            //echo $count;
            $page = new \Think\Page($count,5);

            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','末页');
            $page->setConfig('first','首页');
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (5位/页)');

            $show = $page->show();

            $list = $user->where($map)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
            //var_dump($list);

            $this->assign('list',$list);
        	$this->assign('page',$show);
        	$this->display('./Application/home/view/addfriend.html');
        }
    }

    public function add(){
        header("Content-type:text/html; charset=utf-8");
        //$url = $this->get_url();
    	$nickname = session('nickname');
    	$f_nickname = $_GET['f_nickname'];

    	//判断用户ID是否存在
    	$query = M('user');
    	$map['nickname'] = $f_nickname;
    	$res = $query->where($map)->find();
    	if(empty($res)){
    		echo "<script type='text/javascript'> alert('该用户不存在！'); location.href='/TP/index.php/addfriend.php'; history.back();</script>";

			exit();
    	} 

    	//判断是否已经是好友
    	$query1 = M('friend');
    	$condition['f_nickname']=$f_nickname;
    	$condition['nickname']=$nickname;
    	$res = $query1->where($condition)->find();
        if($res){
        	if($res['fzt']==1){
        		echo "<script type='text/javascript'> alert('您已经添加了该好友。'); location.href='/TP/index.php/addfriend.php'; history.back();</script>";
    			exit();
        	}else if($res['fzt']==0){
                echo "<script type='text/javascript'> alert('您已经发送了好友请求，请等待对方回复！'); location.href='/TP/index.php/addfriend.php';history.back();</script>";
                exit();
            }
        }   

    	//添加好友
    	$data['nickname']=$nickname;
    	$data['f_nickname']=$f_nickname;
    	if($query1->add($data)){
    		echo "<script type='text/javascript'> alert('好友请求发送成功，请等待对方回复'); location.href='/TP/index.php/addfriend.php';history.back(); </script>";
    	}
    }

    /*public function get_url() {
        $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
        $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
        $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
        $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
        return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
     }*/
 
}
