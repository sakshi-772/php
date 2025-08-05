<?php


$conn=pg_connect("host=localhost dbname=postgres user=postgres port=5432");
if(!$conn)
{
echo"connection failed";
}
else
{
echo"connection  successfully created";
}

?>

