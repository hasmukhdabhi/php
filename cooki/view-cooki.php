<?php
echo "Cooki Value : " . $_COOKIE["user"];
setcookie("user", " ", time() - (3600), "/");

?>