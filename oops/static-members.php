<?php
class base{
	
  public static $name = "Yahoo Baba";

}

class derived extends base{
	public static function show(){
     echo parent::$name;
  }
}

$test = new derived();

$test->show();
