<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops</title>
</head>

<body>
    <h2>OOPS</h2>
    <?PHP

    class car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is " . $this->color . " " . $this->model . "!";
        }
    }
    $mycar = new car("Black", "TATA");
    echo $mycar->message();
    echo "<br>";
    $mycar = new car("red", "BMW");
    echo $mycar->message();
    echo "<br>";
    ?>
</body>

</html>