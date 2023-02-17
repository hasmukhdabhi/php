<?php
echo $_SERVER['PHP_SELF']; //Domain URL
echo "<br>";
echo $_SERVER['SERVER_NAME']; // Servar name
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
$_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
$_SERVER['SERVER_ADDR'];
echo "<br>";
$_SERVER['SCRIPT_URI'];
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>Class & Object</h2>
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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        NAME: <input type="text" name="name" placeholder="Enter name" required>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_REQUEST['name']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
    <a href="test.php?subject=PHP&web=W3schools.com">Test</a>
    <br>
    <?php
    print_r(get_html_translation_table());
    ?>
</body>

</html>