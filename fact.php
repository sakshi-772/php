<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
enter no:
<input type="text" name="a" value="<?php echo isset($_GET['a']); ?>">
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
if (isset($_GET["submit"]))
{
$a=$_GET["a"];
$fact=1;
while($a>0)
{
$fact=$fact*$a;
$a--;
}
echo"$fact";
}
?>
