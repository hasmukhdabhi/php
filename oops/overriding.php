<?php

class base{
    public $name;

    public function calc($a,$b){
        return $a * $b;
    }
}
class derived extends base {
    public $name = "Child Class";
    public function clac($a ,$b){
        return $a + $b;
    }
}

$test = new base(5,25);
echo $test->calc(5, 25);
