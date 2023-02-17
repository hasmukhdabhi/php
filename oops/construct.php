<?php

class person
{
    public $name; // properties
    public $age;
    function __construct($name = "No Name", $age = "No Age")
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show() // method 
    {
        echo $this->name . " - " . $this->age ."<br>". "\n";
    }
}

$p1 = new person();
$p2 = new person("Ravi kumar", 20);
$p3 = new person("Rajesh Rathod", 20);
// $p1->name = "Ravi kumar";
// $p1->age = 25;

$p1->show();
$p2->show();
$p3->show();
