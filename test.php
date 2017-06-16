<?php
//update 1 place

function login(){ //function parameters, two variables.

	$servername = "localhost";
	$usernameDB = "root";
	$passwordDB = "";
	$dbname = "db_bookings";

	$UserName = $_SESSION['UserName'];
	$Password = $_SESSION['Password'];
	
	// Create connection
	$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "select * from users where UserName = '$UserName' AND Password='$Password'";
	$result = $conn->query($sql);
	$arr =  array();
	if ($result->num_rows > 0) { 
		return "ok"; 
	} else { 
		return "0 results";
	}
   // return $userName.'-'.$password;  //returns the second argument passed into the function
}




?>