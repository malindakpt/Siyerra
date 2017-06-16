<?php
//update 1 place

session_start();

	$servername = "localhost";
	$usernameDB = "root";
	$passwordDB = "";
	$dbname = "db_bookings";

	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];

	$_SESSION["UserName"] = $UserName;
	$_SESSION['Password'] = $Password;
  
	$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
 
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "select * from users where UserName = '$UserName' AND Password='$Password'";
	$result = $conn->query($sql);
	$arr =  array();
	if ($result->num_rows > 0) { 
		echo "ok"; 
	} else { 
		echo "0 results";
	} 

?>