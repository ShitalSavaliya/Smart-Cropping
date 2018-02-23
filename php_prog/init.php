<?php

$db_name="php_db";
$db_user="root";
$db_pass="";
$host_name="localhost";

$con=mysqli_connect($host_name,$db_user,$db_pass,$db_name);
if($con)
{
	//echo "successful";
}	
else
{
	//echo "locha";
}
?>