<?php
 	namespace Home\Controller;
 	use Think\Controller;
 	class TestController extends Controller {
 		public function index(){
    	header("Content-type:text/html;charset=utf-8");
    	$name = session('nickname');
    	$sender = $_POST['sender'];
		$geter = $_POST['geter'];
        if(empty($name)){
        	header("Location:/TP/index.php/login");
        	exit();
        }

        $query = M("message");
        $condition['sender']=111;
        $condition['geter']=111;
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
			echo "[{
						'content':'".$res['content']."',
						'stime':'".substr($res['stime'],11)."'
					}]";
		}else{
			$result="[{
						'content':'".$res[0]['content']."',
						'stime':'".substr($res[0]['stime'],11)."'
					}";
			while($i<$mNums){
				$result.=",{'content':'".$res[$i]['content']."','stime':'".substr($res[$i]['stime'],11)."'}";
				$i++;
			}
			$result.=']';
			echo $result;
		}

		//收到消息后将它的状态设为1
		if($mNums>0){
		$data['mloop']=1;
		$query->where($condition)->save($data1);
		}
    }
 	}