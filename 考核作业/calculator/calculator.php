<?php
    header("Content-Type:text/html;charset=utf-8");
    
    class count {
    	public $num1;
        public $num11;
    	public $num2;
        public $num22;
    	public $operator;
    	public $result1;
        public $result2;

    	function __construct($num1=0,$num11=0,$num2=0,$num22=0,$operator='+'){
    		$this->num1=$num1;
            $this->num11=$num11;
    		$this->num2=$num2;
            $this->num22=$num22;
    		$this->operator=$operator;
    	}

    	function calculate1() {
    		switch ($this->operator) {
    			case '+':
    				$this->result1 = $this->num1 + $this->num2;
    				break;
    			case '-':
    			    $this->result1 = $this->num1 - $this->num2;
    				break;
    		}
    		return $this->result1;
    	}
        function calculate2() {
            switch ($this->operator) {
                case '+':
                    $this->result2 = $this->num11 + $this->num22;
                    break;
                case '-':
                    $this->result2 = $this->num11 - $this->num22;
                    break;
            }
            return $this->result2;
        }
    }
    $way = new count($_GET['firstNum'],$_GET['firstNum1'],$_GET['secondNum'],$_GET['secondNum2'],$_GET['operator']);
    $result1 = $way->calculate1();
    $result2 = $way->calculate2();
    echo '<h4>计算结果为：'.$result1;
    if($result2<0) {
        echo $result2.'i</h4>';
    } else {
        echo '+'.$result2.'i</h4>';
    }
?>