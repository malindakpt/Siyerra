<?php
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
$Advance4 = $_POST['Advance4'];
$Advance5 = $_POST['Advance5'];
$Advance6 = $_POST['Advance6'];

$Total = $_POST['Total'];

$IncludeFA = $_POST['IncludeFA'];
$IncludeDrone = $_POST['IncludeDrone'];
$Address = $_POST['Address'];

$ThankCardSizeH = $_POST['ThankCardSizeH'];
$ThankCardQualityH = $_POST['ThankCardQualityH'];
$Transport = $_POST['Transport'];

$Album1Type = $_POST['Album1Type'];
$Album2Type = $_POST['Album2Type'];

$Enlarge1Size = $_POST['Enlarge1Size'];
$Enlarge2Size = $_POST['Enlarge2Size'];
$Enlarge3Size = $_POST['Enlarge3Size'];

$Enlarge1Count = $_POST['Enlarge1Count'];
$Enlarge2Count = $_POST['Enlarge2Count'];
$Enlarge3Count = $_POST['Enlarge3Count'];

$SigBoard = $_POST['SigBoard'];

$Comments = $_POST['Comments'];

$PrivateComments = $_POST['PrivateComments'];
$PrivateCommentsCost = $_POST['PrivateCommentsCost'];
$PrivateCommentsPrice = $_POST['PrivateCommentsPrice'];


$sql = "INSERT INTO $DBTableName (dateW,name,  timeW, placeW, CASize, CAPages, CAQuality, FASize, FAPages, FAQuality, thankCardSize, thankCardQuality, wedThankCardCount,
 homeThankCardCount, email, phone, dateH, timeH, placeH, PSSize, PSPages, PSQuality, VidQuality, VidNoOfCam, VidType
 , Advance1, Advance2, Advance3
 , Advance4, Advance5, Advance6
 , Total, Comments, 
 IncludeFA, Address, IncludeDrone, NameG, EmailG, PhoneG,ThankCardSizeH,ThankCardQualityH,Transport,Album1Type,Album2Type,
Enlarge1Size,Enlarge2Size,Enlarge3Size,
Enlarge1Count,Enlarge2Count,Enlarge3Count,
PrivateComments,PrivateCommentsCost,PrivateCommentsPrice,
 SigBoard ) 

VALUES ('$dateW','$name' , '$timeW','$placeW','$CASize','$CAPages','$CAQuality','$FASize','$FAPages', '$FAQuality', 
'$thankCardSize', '$thankCardQuality', '$wedThankCardCount', '$homeThankCardCount', '$email', 
'$phone' , '$dateH' , '$timeH','$placeH', '$PSSize', '$PSPages', '$PSQuality', '$VidQuality', '$VidNoOfCam', '$VidType'
,'$Advance1','$Advance2','$Advance3'
,'$Advance4','$Advance5','$Advance6'
,'$Total','$Comments','$IncludeFA', 
'$Address', '$IncludeDrone',  '$NameG', '$EmailG', '$PhoneG','$ThankCardSizeH', '$ThankCardQualityH', '$Transport','$Album1Type','$Album2Type',
'$Enlarge1Size','$Enlarge2Size','$Enlarge3Size',
'$Enlarge1Count','$Enlarge2Count','$Enlarge3Count',
'$PrivateComments','$PrivateCommentsCost','$PrivateCommentsPrice',
'$SigBoard')";


if ($conn->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>