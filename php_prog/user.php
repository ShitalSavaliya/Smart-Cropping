<?php
include "init.php";
$username=$_POST['username'];
//$sql="SELECT * FROM user;";
$sql="SELECT username,fname,lname,contact,addA,addR,city,state,occupation,password,email FROM user WHERE username='$username';";
//$sql="SELECT email FROM user WHERE username='$username';";
//$response=array();
		
		$result = $con->query($sql);
		if (mysqli_num_rows($result)>0) {
			
			$response["data"] = array();
		 
			while ($row = mysqli_fetch_array($result)) {
				
				$user = array();
				$user["success"]=1;
				$user["username"] = $row["username"];
				$user["fname"] = $row["fname"];
				$user["lname"] = $row["lname"];
				$user["contact"] = $row["contact"];
				$user["addA"] = $row["addA"];
				$user["addR"] = $row["addR"];
				$user["city"] = $row["city"];
				$user["state"] = $row["state"];
				$user["occupation"] = $row["occupation"];
				$user["password"] = $row["password"];
				$user["email"] = $row["email"];
				
				array_push($response["data"], $user);
			}
			//$response["success"] = 1;
			//$response["email"] = $email;
			//$response["message"] = "entry found";
			echo json_encode($response["data"]);
		} else {
			
			$response["success"] = 0;
			$response["message"] = "No entry found";
			echo json_encode($response);
		}

?>