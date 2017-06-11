<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$year = $_POST['year'];
$sql1 = "select * from booking where year(dateW) = '$year' ";
$sql2 = "select * from booking where year(dateH) = '$year' ";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$allList =  array();
if ($result1->num_rows > 0) { 
    while($row = $result1->fetch_assoc()) {
		$arr = array('ID' => $row["ID"], 'name' => $row["name"], 'date' => $row["dateW"], 'time' => $row["timeW"], 'type' => 'Wedd');
		array_push($allList,$arr); 
    }
	
} else {
    echo "0 results wed";
}
if ($result2->num_rows > 0) { 
    while($row = $result2->fetch_assoc()) {
		$arr = array('ID' => $row["ID"], 'name' => $row["name"], 'date' => $row["dateH"], 'time' => $row["timeH"], 'type' => 'Home');
		array_push($allList,$arr); 
    }
	
} else {
    echo "0 results home";
}


echo json_encode($allList);
$conn->close();
?>