<?php 
	class Loader   
	{   
	    private $_loaded_default = array();   
	    private static $OBJ;   
	  
	    # 单例模式   
	    private function __construct()   
	    {   
	  
	    }

	    #覆盖__clone()方法，禁止克隆
	    private function __clone()  
		{  
			
		}   
	  
	    public static function get_instance()   
	    {   
	        if (is_null(self::$OBJ))   
	        {   
	            $class = __CLASS__;   
	            self::$OBJ = new $class;   
	        }   
	           
	        return self::$OBJ;   
	    }

	    public function default_class($class,$type,$data=array())
	    {
	    	$class = strtolower($class);
	    	
	    	# 如果已经加载，则返回对象，避免重复加载
	    	if(isset($this->_loaded_default[$class]))
	    	{
	    		return $this->_loaded_default[$class];
	    	}

	    	# 判断文件路径
	    	if(empty($type))
	    	{
	    		$path = "hero/{$class}.php";
	    	}
	    	else
	    	{
	    		$path = "hero/{$type}/{$class}.php";
	    	}

	    	# 否则加载文件
	    	if(file_exists($path))
	    	{
	    		include $path;
	    	}
	    	else
	    	{
	    		echo "Unable to load the requested class: {$path}";
	    		return FALSE;
	    	}

	    	$class1 = ucfirst($class);
	    	# 实例化对象 
	    	if(empty($data))
	    	{
	    		$instance = new $class1;
	    	}
	    	else
	    	{
	    		$instance = new $class1($data);
	    	}
	    	# 把对象cache起来
	    	$this->_loaded_default[$class] = $instance;   
	  
	        return $instance;
	    }   
	}  
?>  