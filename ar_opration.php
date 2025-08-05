<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
enter first no:
<input type="text" name="a" value="<?php echo isset($_GET['a']); ?>">
enter second no:
<input type="text" name="b" value="<?php echo isset($_GET['b']); ?>">
<input type="submit" name="submit" value="add">
</form>
</body>
</html>
<?php
if (isset($_GET['submit']))
{

$a=$_GET['a'];
$b=$_GET['b'];
$c=$a+$b;
echo "addition is".$c."<br>";
$c=$a-$b;
echo "substraction is".$c."<br>";
$c=$a*$b;
echo "multiplication is".$c."<br>";
if($b!=0)
{
$c=$a/$b;
echo "division is".$c."<br>";
$c=$a%$b;
echo "mod is".$c."<br>";
}
else
{
echo"division and mod by zero is not allowed";
}
}
?>

