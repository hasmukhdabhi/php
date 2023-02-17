<?php
// public 
class base
{
    public $name;
    function __construct($n)
    {
        $this->name = $n;
    }
    public function show()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}

$test = new base("Virat Kohli");
// $test->name = "Kohli Virat";
$test->show();


// protected
class base1
{
    protected $name;
    function __construct($n)
    {
        $this->name = $n;
    }
    protected function show()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}

class derived extends base1
{
    public function show()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}

$test = new derived("Rohit Sharma");
// $test->name = "Kohli Virat";    
$test->show();

// private

class base2
{
    private $name; // propertiy

    function __construct($n)
    {
        $this->name = $n;
    }
    public function show()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}

// class derived extends base2
// {
//     public function show()
//     {
//         echo "Your Name : " . $this->name . "<br>";
//     }
// }

$test = new base2("KL Rahul");
// $test->name = "Kohli Virat";    
$test->show();