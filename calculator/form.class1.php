<?php
    header("Content-Type:text/html;charset=utf-8");

    class count {
    	public $velocity;
    	public $acceleration;
    	public $time;
    	public $result;

    	function __construct($velocity=0,$acceleration=0,$time=0) {
    		$this->velocity=$velocity;
    		$this->acceleration=$acceleration;
    		$this->time=$time;
    	}

    	function calculate() {
    		if($this->time>=0){
    			$this->result = $this->velocity + $this->acceleration * $this->time;
    			return $this->result;
    		} else {
    			$this->result = '时间输入错误';
    			return $this->result;
    		}
    	}
    }
    $way = new count($_GET['velocity'],$_GET['acceleration'],$_GET['time']);
    $result = $way->calculate();
    echo '<h4>计算结果为：'.$result.'</h4>';
?>