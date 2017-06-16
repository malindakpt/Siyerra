<?php
$_SESSION["test"] = $UserName;
include 'loginServer.php';
//Update 2 places

// Create connection 
if(!function_exists('getConnection')){
	include 'DBConnect.php';
}$conn = getConnection();  

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
$Address = $_POST['Address'];
$ID = $_POST['ID'];
$IncludeDrone = $_POST['IncludeDrone'];


$sql = "UPDATE booking SET name='$name', dateW='$dateW', timeW='$timeW', placeW='$placeW', CASize='$CASize', CAPages='$CAPages', CAQuality='$CAQuality', FASize='$FASize', FAPages='$FAPages', FAQuality='$FAQuality', thankCardSize='$thankCardSize', thankCardQuality='$thankCardQuality', wedThankCardCount='$wedThankCardCount',
 homeThankCardCount='$homeThankCardCount', email='$email', phone='$phone', dateH= '$dateH', timeH='$timeH', placeH='$placeH', PSSize='$PSSize', PSPages='$PSPages', PSQuality='$PSQuality', VidQuality='$VidQuality', VidNoOfCam='$VidNoOfCam', VidType='$VidType', Advance1='$Advance1', Advance2='$Advance2', Advance3='$Advance3', 
 Total='$Total', Comments='$Comments', IncludeFA='$IncludeFA', Address='$Address', IncludeDrone='$IncludeDrone'
WHERE  ID = '$ID'";



if ($conn->query($sql) === TRUE) {
    echo "New record edited successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>