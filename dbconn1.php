<?php
$conn=pg_connect("host=localhost dbname=postgres user=postgres port=5432");
$name=$_GET["name"];
$add=$_GET["add"];
$query="select * from stud";
$result=pg_query($conn,$query);
if(!$conn)
{
echo"connection failed";
}
else
{
echo"connection  successfully created";
}
if ($result)
{
echo"inserted successfully";
}
else
{
echo"not inserted";
}

?>

