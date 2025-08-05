<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
enter first no:
<input type="text" name="a" value="<?php echo isset($_GET['a']); ?>">
enter second no:
<input type="text" name="b" value="<?php echo isset($_GET['b']); ?>">
select your choice:
<select name="op">
<option value="add">add</option>
<option value="sub">sub</option>
<option value="mult">mult</option>
<option value="div">div</option>
<option value="mod">mod</option>
</select>
<input type="submit" name="submit" value="add">
</form>
</body>
</html>
<?php
if (isset($_GET['submit']))
{

$a=$_GET['a'];
$b=$_GET['b'];
$op=$_GET['op'];
switch($op)
{
case 'add':
$c=$a+$b;
echo "addition is".$c."<br>";
break;
case 'sub':
$c=$a-$b;
echo "substraction is".$c."<br>";
break;
case 'mult':
$c=$a*$b;
echo "multiplication is".$c."<br>";
case 'div':
if($b!=0)
{
$c=$a/$b;
echo "division is".$c."<br>";
}
else
{
echo"division by zero is not allowed";
}
break;

case 'mod':
if($b!=0)
{
$c=$a%$b;
echo "division is".$c."<br>";
}
else
{
echo"mod by zero is not allowed";
}
break;
}
}
?>

