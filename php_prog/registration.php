<?php
include "init.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$addR=$_POST['addR'];
$addA=$_POST['addA'];
$city=$_POST['city'];
$state=$_POST['state'];
$occupation=$_POST['occupation'];
$sql="insert into user (fname,lname,username,password,addR,addA,city,state,occupation,email,contact) values ('$fname','$lname','$username','$password','$addR','$addA','$city','$state','$occupation','$email','$contact');";
$response=array();
if($con->query($sql))
{
	//echo "inserted";
	$response["success"] =1;
	$response["message"] ="inserted  succeful";
	echo(json_encode($response));
}
else
{
	//echo "failed";
	$response["success"] =0;
	$response["message"] ="failed";
	echo(json_encode($response));
}
?>