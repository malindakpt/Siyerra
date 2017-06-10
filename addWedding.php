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
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$place = $_POST['place'];
$CASize = $_POST['CASize'];
$CAPages = $_POST['CAPages'];
$CAQuality = $_POST['CAQuality'];
$FASize = $_POST['FASize'];
$FAPages = $_POST['FAPages'];
$FAQuality = $_POST['FAQuality'];
$thankCardSize = $_POST['thankCardSize'];
$thankCardQuality = $_POST['thankCardQuality'];
$wedThankCardCount = $_POST['wedThankCardCount'];
$homeThankCardCount = $_POST['homeThankCardCount'];

$sql = "INSERT INTO booking (name, date, time,	place, CASize, CAPages, CAQuality, FASize, FAPages, FAQuality, thankCardSize, thankCardQuality, wedThankCardCount, homeThankCardCount) 
VALUES ('$name', '$date' , '$time','$place','$CASize','$CAPages','$CAQuality','$FASize','$FAPages', '$FAQuality', '$thankCardSize', '$thankCardQuality', '$wedThankCardCount', '$homeThankCardCount')";

//VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$name = 'ASD';
$date = '2012/12/12';
$time = 2;
$place = 'Wahumuwa';
$CASize = '12';
$CAPages = 123;
$CAQuality = 'good';
$FASize = '123';
$FAPages = 12;
$FAQuality  = '123';
$thankCardSize = '123';
$thankCardQuality = 'goog';
$wedThankCardCount =123;
$homeThankCardCount = 32;

//$stmt->bind_param($name, $date, $time, $place, $CASize, $CAPages, $CAQuality, $FASize, $FAPages, $FAQuality, $thankCardSize, $thankCardQuality, $wedThankCardCount, $homeThankCardCount);




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>