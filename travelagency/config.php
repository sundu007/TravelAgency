<?php 
$host="localhost";
$user="root";
$pass="";
$db_name="php";
try
{
$dbhandle = mysql_connect($host, $user, $pass);
$selected = mysql_select_db($db_name);
}
catch(Exception $e)
{
	echo $e;
}
?>
