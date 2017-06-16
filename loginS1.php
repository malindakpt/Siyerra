<?php
//update 1 place

session_start(); 

	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];

	$_SESSION["UserName"] = $UserName;
	$_SESSION['Password'] = $Password;
  
	include 'DBConnect.php';
	$conn = getConnection();  
 
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