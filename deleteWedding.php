<?php
 // Create connection 
if(!function_exists('getConnection')){
	include 'DBConnect.php';
}$conn = getConnection();  

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$ID = $_POST['ID'];
$DBTableName = $_POST['DBTableName'];
// sql to delete a record
$sql = "DELETE FROM $DBTableName WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>