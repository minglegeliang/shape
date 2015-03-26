<?php
    abstract class Shape{
		public $name = null;
        public $a = null;
        public $rad = null;
        public $s = null;
        public $c = null;
		abstract function s();
		abstract function c();
	}

    class Square extends Shape { 
        public function __construct($a){
            $this->a = $a;
        }
        public function s() {  
            if(!empty($a)) {
                echo "error!\n"; 
            } else {
                $this->s = $this->a*$this->a;
                echo "S=",$this->s."\n";
            }
        }   
        public function c() {
           if(!empty($a)) {
                echo "error!\n";
            } else {                
                $this->c = 4*$this->a;
                echo "C=",$this->c."\n";
            }
        }
    }

    class Circle extends Shape {
         public function __construct($rad){
            $this->rad = $rad;
        }
        public function s() {  
            if(!empty($rad)) {
                echo "error!\n";
            } else {                
                $this->s = pi()*$this->rad*$this->rad;
                echo "S=",$this->s."\n";
            }
        }   
        public function c() {
            if(!empty($rad)) {
                echo "error!\n";
            } else {                
                $this->c = 2*pi()*$this->rad;
                echo "C=",$this->c."\n";
            }
        }
    }

    
$name = new Circle("");
$name->c();
?>
