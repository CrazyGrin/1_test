<?php
    header("Content-Type:text/html;charset=utf-8");

    class count {
    	public $n;
    	public $m;
    	public $result;
    	public $arr;

    	function __construct($n=1,$m=1,$result=1) {
    		$this->n=$n;
    		$this->m=$m;
    		$this->result=$result;
    	}

    	function calculate() {
    		if($this->n > 0 && $this-> m >0) {
	    		$this->arr[$this->n];
	    		$c=0;
	    		$j=$this->n+1;
	    		for ($i=0; $i < $this->n; $i++) { 
	    			$arr[$i]=$i+1;
	    		}
	    		do {
	    			for ($i=0; $i < $this->n ; $i++) { 
	    				if($arr[$i]!=0 && $arr[$i] % $this->m ==0) {
	    					$arr[$i]=0;
	    					$c++;
	    				}
	    			}
	    			for ($i=0; $i < $this->n; $i++) { 
	    				if($arr[$i]!=0) {
	    					$arr[$i]=$j;
	    					$j++;
	    				}
	    			}
	    			$s=$this->n-$c;
	    		}while($s>1);
	    		for ($i=0; $i < $this->n; $i++) { 
	    			if($arr[$i]!=0) {
	    				$i++;
	    				return $i;
	    			}
    		    }
    		} else {
    			return -1;
    		}
    	}
    }

    $way = new count($_GET['n'],$_GET['m']);
    $result = $way->calculate();
    if($result != -1) {
    	echo '<h4>应坐在第 '.$result.' 号位置。</h4>';
    } else {
    	echo '<h4>输入的值有误！</h4>';
    }
?>