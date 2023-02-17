<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Hasmukh Dabhi";

setcookie($cookie_name, $cookie_value, time() + (3600), "/");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cooki is not set!";
    } else {
        echo $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>