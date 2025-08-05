<?php
setcookie("a",5);
setcookie("b",7);
$a=$_COOKIE["a"];
$b=$_COOKIE["b"];
$c=$a+$b;
echo "addition is $c";

?>
