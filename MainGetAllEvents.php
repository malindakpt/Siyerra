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
// $ID = $_POST['ID'];

$sql = "select * from $DBTableName ";
$result = $conn->query($sql);
$arr =  array();
if ($result->num_rows > 0) {
    // output data of each row
	echo 'data:text/csv;charset=utf-8,';
	echo 'ID,Groom Name, Groom Email, Groom Phone, Bride Name, Bride Email, Bride Phone, Address, Wedding/Main date, Wedding Time, Wedding Place,Homec/Enga. Date, Homecoming Time, Homecoming Place, Wedding/Main Album Quality, Album Size,  Album Pages, Homec/Enga. Album Quality, Album Type, Album Size, Album Pages ,Preshoot Album Quality, Album Size, Album Pages, Include Family Album, Enlargement Detail 1, Enlargement Detail 2, Enlargement Detail 3,Wedding ThankCard Quality, Card Size, Card Count, Homecoming ThankCard Quality, Card Size, Card Count,Video Quality, No of Cameras, Coverage Type, Include Drone, Total Album Cost, Transport Cost, Alvance 1, Alvance 2, Alvance 3, Comments'."\n";

	while($row = $result->fetch_assoc()) {

		echo 
		 $row["ID"].','
		.$row["name"].','
		.$row["email"].','
		.$row["phone"].','
		.$row["NameG"].','
		.$row["EmailG"].','
		.$row["PhoneG"].','
		.$row["Address"].','
		.$row["dateW"].','
		.$row["timeW"].','
		.$row["placeW"].','
		.$row["dateH"].','
		.$row["timeH"].','
		.$row["placeH"].','
		
		.$row["CAQuality"].','
		.$row["Album1Type"].','
		.$row["CASize"].','
		.$row["CAPages"].','
		.$row["FAQuality"].','
		.$row["Album2Type"].','
		.$row["FASize"].','
		.$row["FAPages"].','
		.$row["PSQuality"].','
		.$row["PSSize"].','
		.$row["PSPages"].','

		.$row["IncludeFA"].','
		.$row["SigBoard"].','
		
		.$row["Enlarge1Size"].','
		.$row["Enlarge2Size"].','
		.$row["Enlarge3Size"].','
		.$row["Enlarge1Count"].','
		.$row["Enlarge2Count"].','
		.$row["Enlarge3Count"].','

		.$row["thankCardQuality"].','
		.$row["thankCardSize"].','
		.$row["wedThankCardCount"].','
		.$row["ThankCardQualityH"].','
		.$row["ThankCardSizeH"].','	
		.$row["homeThankCardCount"].','
		.$row["VidQuality"].','
		.$row["VidNoOfCam"].','
		.$row["VidType"].','
		.$row["IncludeDrone"].','
		.$row["HelperCount"].','
		

		.$row["Total"].','
		.$row["Transport"].','
		.$row["Advance1"].','
		.$row["Advance2"].','
		.$row["Advance3"].','
		.$row["Advance4"].','
		.$row["Advance5"].','
		.$row["Advance6"].','
	
		.$row["Comments"].','
		.$row["PrivateComments"].','
		.$row["PrivateCommentsCost"].','
		.$row["PrivateCommentsPrice"].','

		.$row["Album1Cost"].','
		.$row["Album1Price"].','
		.$row["Album2Cost"].','
		.$row["Album2Price"].','
		.$row["Album3Cost"].','
		.$row["Album3Price"].','
		.$row["MiniAlbCost"].','
		.$row["MiniAlbPrice"].','
		.$row["SigboardCost"].','
		.$row["SigboardPrice"].','
		.$row["EnlargeCost"].','
		.$row["EnlargePrice"].','
		.$row["WedThankCost"].','
		.$row["WedThankPrice"].','
		.$row["HomThankCost"].','
		.$row["HomThankPrice"].','
		.$row["VidCost"].','
		.$row["VidPrice"].','
		.$row["DroneCost"].','
		.$row["DronePrice"].','
		.$row["HelperCost"].','
		.$row["HelperPrice"].','
		.$row["DesignerCost"].','
		.$row["DesignerPrice"]."\n"; 
    }
	// echo json_encode($arr);
} else {
    echo "0 results";
}
$conn->close();
?>