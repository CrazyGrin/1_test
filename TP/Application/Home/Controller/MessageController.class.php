<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function index(){
    	$data['geter']=$_GET['geter'];
    	$data['nickname']=session('nickname');

    	$this->assign($data);
        $this->display('./Application/home/view/message.html');
    }

    public function sendmes(){
    	header("Content-type:text/html;charset=utf-8");
    	$name = session('nickname');
        if(empty($name)){
        	header("Location:/TP/index.php/login");
        	exit();
        }

        $sender = $_POST['sender'];
		$geter = $_POST['geter'];
		$content = $_POST['content'];
		$query = M("message");
		$data['sender']=$sender;
		$data['geter']=$geter;
		$data['content']=$content;
		$data['stime']=date('Y-m-d H:i:s',time());
		if($query->add($data)){
			date_default_timezone_set("PRC");
			echo date("H:i:s");
		}else{
			echo "";
		}
    }

    public function getmes(){
    	header("Content-type:text/html;charset=utf-8");
    	$name = session('nickname');
    	$sender = $_POST['sender'];
		$geter = $_POST['geter'];
        if(empty($name)){
        	header("Location:/TP/index.php/login");
        	exit();
        }

        $query = M("message");
        $condition['sender']=$geter;
        $condition['geter']=$sender;
        $condition['mloop']=0;
        $res = $query->order('stime ASC')->where($condition)->select();
		//消息条数   采用json返回数据
		$mNums = count($res);
		//var_dump($mNums);

		$i=1;
		if($mNums<1){
			echo "nomessage";
			exit();
		}else if($mNums==1){
			echo "[{'content':'".$res[0]['content']."','stime':'".substr($res[0]['stime'],11)."'}]";
		}else{
			$result="[{'content':'".$res[0]['content']."','stime':'".substr($res[0]['stime'],11)."'}";
			while($i<$mNums){
				$result.=",{'content':'".$res[$i]['content']."','stime':'".substr($res[$i]['stime'],11)."'}";
				$i++;
			}
			$result.=']';
			echo $result;
		}

		//收到消息后将它的状态设为1
		if($mNums>0){
		$data1['mloop']=1;
		$query->where($condition)->save($data1);
		}
    }

}
