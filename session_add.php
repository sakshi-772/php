<?php
session_start();
?>
<html>
<body>
<form action=session_add.php method="GET">
enter first no:
<input type="text" name="a"  value=<?php echo isset($_GET["a"]); ?>>
<br>
enter second no:
<input type="text" name="b" value=<?php echo isset($_GET["b"]); ?>>
<br>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
if (isset($_GET["submit"]))
{
$_SESSION["a"]=$_GET["a"];
$_SESSION["b"]=$_GET["b"];
$sum=$_SESSION["a"]+$_SESSION["b"];
echo"addition is $sum";
}
?>

