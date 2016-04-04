<?php

	/*include "load.php";

	//$result = load('arm1','arms');
	
	$result = load('power1','power');
	@ \A\$result->run();*/

	namespace B;
	use A;

	const test = 'Btest';
	function test() { 
	    return __FUNCTION__; 
	}

	class Test{
	    public function __construct(){
	        return __METHOD__;
	    }
	}

	include "a.php";

	echo \B\test;

	echo A\test;    

	echo test; 

	echo namespace\test;

	header("Content-Type:text/html;charset=utf-8");
?>

	