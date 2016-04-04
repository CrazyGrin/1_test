<?php    

namespace A;

const test = 'Atest'; 

function test() { 
    return __FUNCTION__; 
}

class Test{
    public function __construct(){
        return __METHOD__;
    }
}
?>