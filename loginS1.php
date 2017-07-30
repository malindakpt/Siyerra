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
	
	$sql = "select *,DATEDIFF( ExpireDate, CURDATE()) as Exp from users where UserName = '$UserName' AND Password='$Password'";
	$result = $conn->query($sql);
	$arr =  array();
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		if((int)$row["Exp"]<0){
			echo "exp";
		}else{
			echo "ok"; 
		}
	} else { 
		echo "0 results";
	} 

?>