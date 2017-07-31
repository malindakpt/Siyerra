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

$DBTableName = $_POST['DBTableName'];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$NameG = $_POST['NameG'];
$EmailG = $_POST['EmailG'];
$PhoneG = $_POST['PhoneG'];

// $dateW = $_POST['dateW'];

$dateW = $_POST['dateW'] !== '' ? $_POST['dateW'] : '2010-01-01';

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

$dateH = $_POST['dateH'] !== '' ? $_POST['dateH'] : '2010-01-01';
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

$ThankCardSizeH = $_POST['ThankCardSizeH'];
$ThankCardQualityH = $_POST['ThankCardQualityH'];
$Transport = $_POST['Transport'];

$Album1Type = $_POST['Album1Type'];
$Album2Type = $_POST['Album2Type'];

$Enlarge1 = $_POST['Enlarge1'];
$Enlarge2 = $_POST['Enlarge2'];
$Enlarge3 = $_POST['Enlarge3'];


$sql = "UPDATE $DBTableName SET name='$name', dateW='$dateW', timeW='$timeW', placeW='$placeW', CASize='$CASize', CAPages='$CAPages', CAQuality='$CAQuality', FASize='$FASize', FAPages='$FAPages', FAQuality='$FAQuality', thankCardSize='$thankCardSize', thankCardQuality='$thankCardQuality', wedThankCardCount='$wedThankCardCount',
 homeThankCardCount='$homeThankCardCount', email='$email', phone='$phone', dateH= '$dateH', timeH='$timeH', placeH='$placeH', PSSize='$PSSize', PSPages='$PSPages', PSQuality='$PSQuality', VidQuality='$VidQuality', VidNoOfCam='$VidNoOfCam', VidType='$VidType', Advance1='$Advance1', Advance2='$Advance2', Advance3='$Advance3', 
 Total='$Total', Comments='$Comments', IncludeFA='$IncludeFA', Address='$Address', IncludeDrone='$IncludeDrone',
 NameG='$NameG', EmailG='$EmailG', PhoneG='$PhoneG'
 , ThankCardSizeH='$ThankCardSizeH', ThankCardQualityH='$ThankCardQualityH', Transport='$Transport', Album1Type='$Album1Type', Album2Type='$Album2Type'
,Enlarge1='$Enlarge1', Enlarge2='$Enlarge2', Enlarge3= '$Enlarge3'

WHERE  ID = '$ID'";



if ($conn->query($sql) === TRUE) {
    echo "Existing record edited successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>