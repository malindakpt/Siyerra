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
$dateW = $_POST['dateW'];
$timeW = $_POST['timeW'];
$placeW = $_POST['placeW'];
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
$email = $_POST['email'];
$phone = $_POST['phone'];
$dateH = $_POST['dateH'];
$timeH = $_POST['timeH'];
$placeH = $_POST['placeH'];
$PSSize = $_POST['PSSize'];
$PSPages  = $_POST['PSPages'];
$PSQuality = $_POST['PSQuality'];
$VidQuality = $_POST['VidQuality'];
$VidNoOfCam = $_POST['VidNoOfCam'];
$VidType = $_POST['VidType'];
$Advance1 = $_POST['Advance1'];
$Advance2 = $_POST['Advance2'];
$Advance3 = $_POST['Advance3'];
$Total = $_POST['Total'];
$Comments = $_POST['Comments'];
$IncludeFA = $_POST['IncludeFA'];

$sql = "INSERT INTO booking (name, dateW, timeW, placeW, CASize, CAPages, CAQuality, FASize, FAPages, FAQuality, thankCardSize, thankCardQuality, wedThankCardCount,
 homeThankCardCount, email, phone, dateH, timeH, placeH, PSSize, PSPages, PSQuality, VidQuality, VidNoOfCam, VidType, Advance1, Advance2, Advance3, Total, Comments, IncludeFA) 
VALUES ('$name', '$dateW' , '$timeW','$placeW','$CASize','$CAPages','$CAQuality','$FASize','$FAPages', '$FAQuality', 
'$thankCardSize', '$thankCardQuality', '$wedThankCardCount', '$homeThankCardCount', '$email', 
'$phone' , '$dateH' , '$timeH','$placeH', '$PSSize', '$PSPages', '$PSQuality', '$VidQuality', '$VidNoOfCam', '$VidType', '$Advance1','$Advance2','$Advance3','$Total','$Comments','$IncludeFA')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>