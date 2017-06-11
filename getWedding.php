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
$ID = $_POST['ID'];
$sql = "select * from booking where ID = '$ID'";
$result = $conn->query($sql);
$arr =  array();
if ($result->num_rows > 0) {
    // output data of each row
	//name, date, time,	place, CASize, CAPages, CAQuality, FASize, FAPages, FAQuality, thankCardSize, thankCardQuality, wedThankCardCount, homeThankCardCount)
    while($row = $result->fetch_assoc()) {
		$arr = array('ID' => $row["ID"], 'name' => $row["name"], 
		'dateW' => $row["dateW"], 'timeW' => $row["timeW"],'placeW' => $row["placeW"], 
		'dateH' => $row["dateH"], 'timeH' => $row["timeH"],'placeH' => $row["placeH"], 
		'CASize' => $row["CASize"], 'CAPages' => $row["CAPages"], 
		'CAQuality' => $row["CAQuality"], 'FASize' => $row["FASize"], 'FAPages' => $row["FAPages"],
		'FAQuality' => $row["FAQuality"], 'thankCardSize' => $row["thankCardSize"],
		'thankCardQuality' => $row["thankCardQuality"], 'wedThankCardCount' => $row["wedThankCardCount"], 'homeThankCardCount' => $row["homeThankCardCount"],
		'email' => $row["email"], 'phone' => $row["phone"]);
		//array_push($allList,$arr); 
    }
	echo json_encode($arr);
} else {
    echo "0 results";
}
$conn->close();
?>