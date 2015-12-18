<?php
    header("Content-Type:text/html;charset=utf-8");
    
    class count {
    	public $num1;
    	public $num2;
    	public $operator;
    	public $result;

    	function __construct($num1=0,$num2=0,$operator='+'){
    		$this->num1=$num1;
    		$this->num2=$num2;
    		$this->operator=$operator;
    	}

    	function calculate() {
    		switch ($this->operator) {
    			case '+':
    				$this->result = $this->num1 + $this->num2;
    				break;
    			case '-':
    			    $this->result = $this->num1 - $this->num2;
    				break;
    			case '*':
    			    $this->result = $this->num1 * $this->num2;
    			    break;
    			case '/':
    			    $this->result = $this->num1 / $this->num2;
    			    break;
    		}
    		return $this->result;
    	}
    }
    $way = new count($_GET['firstNum'],$_GET['secondNum'],$_GET['operator']);
    $result = $way->calculate();
    echo '<h4>计算结果为：'.$result.'</h4>';
?>