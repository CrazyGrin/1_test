<?php 

	 function load($name, $type='', $data=array())   
	    {   
	        static $loader = NULL;   
	        if (is_null($loader))   
	        {   
	            include ('autoload.php');   
	            $loader = Loader::get_instance();   
	        }   
	  
	        return $loader->default_class($name,$type,$data);   
	    }
