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
$DBTableName = $_POST['DBTableName'];
$ID = $_POST['ID'];

$sql = "select * from $DBTableName where ID = '$ID'";
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
		'VidQuality' => $row["VidQuality"], 'VidNoOfCam' => $row["VidNoOfCam"],'VidType' => $row["VidType"]
		
		,'Advance1' => $row["Advance1"], 'Advance2' => $row["Advance2"],'Advance3' => $row["Advance3"]
		,'Advance4' => $row["Advance4"], 'Advance5' => $row["Advance5"],'Advance6' => $row["Advance6"]

		,'Total' => $row["Total"], 'Comments' => $row["Comments"]
		,'IncludeFA' => $row["IncludeFA"]
		,'Address' => $row["Address"], 'IncludeDrone' => $row["IncludeDrone"]
		,'NameG' => $row["NameG"], 'EmailG' => $row["EmailG"],'PhoneG' => $row["PhoneG"]
		,'ThankCardSizeH' => $row["ThankCardSizeH"],'ThankCardQualityH' => $row["ThankCardQualityH"]
		,'Transport' => $row["Transport"], 'Album1Type' => $row["Album1Type"], 'Album2Type' => $row["Album2Type"]
		,'PrivateComments' => $row["PrivateComments"], 'PrivateCommentsCost' => $row["PrivateCommentsCost"], 'PrivateCommentsPrice' => $row["PrivateCommentsPrice"]
		,'Enlarge1Size' => $row["Enlarge1Size"]	,'Enlarge2Size' => $row["Enlarge2Size"]	,'Enlarge3Size' => $row["Enlarge3Size"]
		,'Enlarge1Count' => $row["Enlarge1Count"]	,'Enlarge2Count' => $row["Enlarge2Count"]	,'Enlarge3Count' => $row["Enlarge3Count"]
		,'SigBoard' => $row["SigBoard"]

		,'Album1Cost' => $row["Album1Cost"]	,'Album1Price' => $row["Album1Price"]
		,'Album2Cost' => $row["Album2Cost"]	,'Album2Price' => $row["Album2Price"]
		,'Album3Cost' => $row["Album3Cost"]	,'Album3Price' => $row["Album3Price"]
		,'MiniAlbCost' => $row["MiniAlbCost"]	,'MiniAlbPrice' => $row["MiniAlbPrice"]
		,'SigboardCost' => $row["SigboardCost"]	,'SigboardPrice' => $row["SigboardPrice"]
		,'EnlargeCost' => $row["EnlargeCost"]	,'EnlargePrice' => $row["EnlargePrice"]
		,'WedThankCost' => $row["WedThankCost"]	,'WedThankPrice' => $row["WedThankPrice"]
		,'HomThankCost' => $row["HomThankCost"]	,'HomThankPrice' => $row["HomThankPrice"]
		,'VidCost' => $row["VidCost"]	,'VidPrice' => $row["VidPrice"]
		,'DroneCost' => $row["DroneCost"]	,'DronePrice' => $row["DronePrice"]
		,'HelperCost' => $row["HelperCost"]	,'HelperPrice' => $row["HelperPrice"]
		,'DesignerCost' => $row["DesignerCost"]	,'DesignerPrice' => $row["DesignerPrice"]

		,'CostVersion' => $row["CostVersion"]

		
		); 
    }
	echo json_encode($arr);
} else {
    echo "0 results";
}
$conn->close();
?>