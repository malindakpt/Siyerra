<?php
// Create connection 
if(!function_exists('getConnection')){
	include '../DBConnect.php';
}$conn = getConnection();  

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start(); 
$para="";
$tableName=$_SESSION['TableName'];

foreach( $_POST as $val ) {
    if( is_array( $val ) ) {
        foreach( $val as $thing ) {
            echo $val;
        }
    } else {
        $para=$para."('". $tableName ."','". $val ."'),";
    }
}

$delete = "DELETE FROM costmodel WHERE TableName = '".$tableName."'";
if ($conn->query($delete) === TRUE) {
    echo "deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO costmodel ( TableName, KeyVal ) VALUES ".substr($para, 0, -1);

if ($conn->query($sql) === TRUE) {
    echo "  Added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>