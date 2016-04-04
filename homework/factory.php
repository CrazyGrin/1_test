<?php
    
    class FruitFactory {
        private $history, $class, $constructor_args;
        
        function __construct( $class ) {
            $args = func_get_args();
            $this->class = $class;
            $this->constructor_args = array_slice( $args, 1 );
        }
        
        function __call( $method, $args ) {
            $this->history[] = array(
                'action'    => 'call',
                'method'    => $method,
                'args'      => $args
            );
        }
        
        function __set( $property, $value ) {
            $this->history[] = array(
                'action'    => 'set',
                'property'  => $property,
                'value'     => $value
            );
        }
        
        function instance() {
            $reflection_object = new ReflectionClass( $this->class ); 
            $object = $reflection_object->newInstanceArgs( $this->constructor_args ); 
            
            foreach( $this->history as $item ) {
                if( $item['action'] == 'call' ) {
                    call_user_func_array( array( $object, $item['method'] ), $item['args'] );
                }
                if( $item['action'] == 'set' ) {
                    $object->{$item['property']} = $item['value'];
                }
            }
            
            return $object;
        }
    }
    
    class Fruit {
        private $name, $color;
        public $price;
        
        function __construct( $name, $color ) {
            $this->name = $name;
            $this->color = $color;
        }
        
        function setName( $name ) {
            $this->name = $name;
        }
        
        function say() {
            print "Hello, this is an {$this->color} {$this->name}, its price is {$this->price} RMB.";
        }
    }
    
    $fruit_factory = new FruitFactory('Fruit', 'Apple','red');
    $fruit_factory->setName('Apple');
    $fruit_factory->price = 5;

    $apple = $fruit_factory->instance();
    $apple->say();
?>
