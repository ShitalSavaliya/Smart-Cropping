<?php
session_start();
include "init.php";
$username=$_POST['username'];
$password=$_POST['password'];
$qry="SELECT * FROM user  where username='$username' and password='$password'";
$result=mysqli_query($con,$qry);
$count=mysqli_num_rows($result);
if($count==1)
{
	//$row=mysqli_fetch_array($result);
	//$response["uid"]=$row['uid'];
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$response["success"] =1;
	$response["message"] ="login successful";
	echo json_encode($response);
}
else
{
	$response["success"] =0;
	$response["message"] ="login failed";
	echo json_encode($response);
}
	   if(isset($_GET['LogOut'])){
		   session_unregister('username');
	   }
?>