<?php
setcookie("a",5);
setcookie("b",7);
if(isset($_COOKIE["a"], $_COOKIE["b"]))
{

//$a=$_COOKIE["a"];
//$b=$_COOKIE["b"];
$c=$_COOKIE["a"]+$_COOKIE["b"];
echo "addition is $c";

}
?>
