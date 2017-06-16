<?php
//update 1 place

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bookings";


echo $_SESSION['test'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$UserName = $_SESSION['UserName'];
$Password = $_SESSION['Password'];

//. $_SESSION["favcolor"]
$sql = "select * from users where UserName = '$UserName' AND Password='$Password'";
$result = $conn->query($sql);
$arr =  array();
if ($result->num_rows > 0) {
	$_SESSION["UserName"] = $UserName;
	$_SESSION["Password"] = $Password;
	echo "ok1"; 
} else {
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	
	$sql = "select * from users where UserName = '$UserName' AND Password='$Password'";
	$result = $conn->query($sql);
	$arr =  array();
	if ($result->num_rows > 0) {
		$_SESSION["UserName"] = $UserName;
		$_SESSION["Password"] = $Password;
		echo "ok2"; 
	} else { 
		echo "0 results";
	}
}
$conn->close();
?>