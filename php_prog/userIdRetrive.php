<?php
include "init.php";
$username=$_POST['username'];
$sql="SELECT userId FROM user WHERE username='$username';";
$response=array();
		
		$result = $con->query($sql);
		if ($result -> num_rows > 0) {
			while($row = $result -> fetch_assoc())
			{
					$response["userId"] = $row["userId"];
			}
			$response["success"] = 1;
			//$response["user"] = $row["userId"];
			$response["message"] = "entry found";
			echo json_encode($response);
		} else {
			
			$response["success"] = 0;
			$response["message"] = "No entry found";
			echo json_encode($response);
		}

?>