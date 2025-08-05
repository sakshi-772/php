<?php
if(isset($_COOKIE["a"]))
{
$cnt=$_COOKIE["a"]+1;
}
else
{
$cnt=1;
}
setcookie('a',$cnt,time()+3600);
echo"you visit $cnt times to the program";
?>
