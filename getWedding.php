<?php
//update 1 place

// Create connection 
if(!function_exists('getConnection')){
	include 'DBConnect.php';
}$conn = getConnection();  

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
	while($row = $result->fetch_assoc()) {
		$arr = array('ID' => $row["ID"], 'name' => $row["name"], 
		'dateW' => $row["dateW"], 'timeW' => $row["timeW"],'placeW' => $row["placeW"], 
		'dateH' => $row["dateH"], 'timeH' => $row["timeH"],'placeH' => $row["placeH"], 
		'CASize' => $row["CASize"], 'CAPages' => $row["CAPages"], 
		'CAQuality' => $row["CAQuality"], 'FASize' => $row["FASize"], 'FAPages' => $row["FAPages"],
		'FAQuality' => $row["FAQuality"], 'thankCardSize' => $row["thankCardSize"],
		'thankCardQuality' => $row["thankCardQuality"], 'wedThankCardCount' => $row["wedThankCardCount"], 'homeThankCardCount' => $row["homeThankCardCount"],
		'email' => $row["email"], 'phone' => $row["phone"],
		'PSSize' => $row["PSSize"], 'PSPages' => $row["PSPages"],'PSQuality' => $row["PSQuality"],
		'VidQuality' => $row["VidQuality"], 'VidNoOfCam' => $row["VidNoOfCam"],'VidType' => $row["VidType"],
		
		'Advance1' => $row["Advance1"], 'Advance2' => $row["Advance2"],'Advance3' => $row["Advance3"],
		'Total' => $row["Total"], 'Comments' => $row["Comments"],'IncludeFA' => $row["IncludeFA"],
		'Address' => $row["Address"], 'IncludeDrone' => $row["IncludeDrone"],

		'NameG' => $row["NameG"], 'EmailG' => $row["EmailG"],'PhoneG' => $row["PhoneG"]

		,'ThankCardSizeH' => $row["ThankCardSizeH"],'ThankCardQualityH' => $row["ThankCardQualityH"],
		'Transport' => $row["Transport"], 'Album2Type' => $row["Album2Type"]
		
		); 
    }
	echo json_encode($arr);
} else {
    echo "0 results";
}
$conn->close();
?>