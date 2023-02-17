<?php

class employee
{
    public $name;
    public $age;
    public $salary;
    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info()
    {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
}
class manager extends employee // class two create 
{
    public $ta = 2000;
    public $phone  = 500;
    public $totalsalary;

    function info()
    {
        $this->totalsalary = $this->salary + $this->ta + $this->phone;

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->totalsalary . "<br>";
    }
}

$e1 = new employee("Ram kumar", 25, 15000); // object create 
$e2 = new manager("Vijay sharma", 35, 50000);

$e1->info();
$e2->info();