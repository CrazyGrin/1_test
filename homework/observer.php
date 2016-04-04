<?php

#主题
class Paper{

    private $_observers = array();

    #注册观察者
    public function register($sub){
        $this->_observers[] = $sub;
    }

    #统一访问
    public function trigger(){
        if(!empty($this->_observers)){
            foreach($this->_observers as $observer){
                $observer->update();
            }
        }
    }
}

 #接口
interface Observerable{
    public function update();
}

class Subscriber implements Observerable{
    public function update(){
        echo "Callback";
    }
}

$paper = new Paper();

$paper->register(new Subscriber());

//$paper->register(new Subscriber1());

//$paper->register(new Subscriber2());

$paper->trigger();
