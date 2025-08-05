<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="GET">
enter first no:
<input type="text" name="a"><br>
enter second no:
<input type="text" name="b"><br>
<input type="submit" value="add">
</form>
<?php
$a=$_GET["a"];
$b=$_GET["b"];
$c=$a+$b;
echo "$c";
?>
</body>
</html>
