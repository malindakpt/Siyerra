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
$sql = "select * from booking where year(date) = '$year'";
$result = $conn->query($sql);
$allList =  array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$arr = array('ID' => $row["ID"], 'name' => $row["name"], 'date' => $row["date"], 'time' => $row["time"]);
		array_push($allList,$arr); 
    }
	echo json_encode($allList);
} else {
    echo "0 results";
}
$conn->close();
?>