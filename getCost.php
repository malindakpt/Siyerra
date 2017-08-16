<?php

function getAllCost(){
// Create connection 
if(!function_exists('getConnection')){
	include 'DBConnect.php';
}$conn = getConnection();  

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//session_start(); 
$para="";
$tableName=$_SESSION['TableName'];

$sql = "SELECT * FROM costmodel WHERE TableName = '".$tableName."'";
$result = $conn->query($sql);
$ans="";

if ($result->num_rows > 0) {
   	while($row = $result->fetch_assoc()) {
		$ans = $ans.$row["KeyVal"].';;;;';
    }
}

$conn->close();

return $ans;

}
?>