<?php

interface compareway {
	function compare();
}

class way implements compareway {
	public $a;
	public $b;

	function __construct($a=0,$b=0) {
		$this->a=$a;
		$this->b=$b;
	}

	function compare() {
		if($this->a > $this->b) {
			return $a;
		} else {
			return $b;
		}
	}
	
}

?>