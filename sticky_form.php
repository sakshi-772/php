<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="GET">
enter first no:
<input type="text" name="a" value=<?php echo isset($_GET["a"]); ?>><br>
enter second no:
<input type="text" name="b" value=<?php echo isset($_GET["b"]); ?>><br>
<input type="submit" value="add" name="submit">
</form>
<?php
if (isset($_GET["submit"]))
{
$a=$_GET["a"];
$b=$_GET["b"];
$c=$a+$b;
echo "$c";
}
?>
</body>
</html>
