<?php
//update 1 place

function login(){ //function parameters, two variables.
 
	
	if($_SESSION) {
		$UserName = $_SESSION['UserName'];
		$Password = $_SESSION['Password'];
		
		//$DB1 = include 'DBConnect.php';
		
		// Create connection 
		if(!function_exists('getConnection')){
			include 'DBConnect.php';
		}$conn = getConnection();  

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "select * , DATEDIFF( ExpireDate, CURDATE()) as Exp from users where UserName = '$UserName' AND Password='$Password'";
		$result = $conn->query($sql);
		$arr =  array();

		if ($result->num_rows > 0) {
			if($row = $result->fetch_assoc()) {
				$_SESSION['TableName'] =$row["TableName"];
				return "ok;;;;".$row["TableName"].';;;;'.$row["StudioName"].';;;;'.$row["Cost"].';;;;'.$row["Exp"].';;;;'.$row["Enlargements"];
			}
		} else { 
			return "0 results";
		}



		$conn->close();
	
	} else {
		return "0 results";
	}
}




?>