<?php

session_start(); 
include 'loginS2.php';
 
if("ok" != login()){
	echo "ip";
	return;
}

// Create connection 
if(!function_exists('getConnection')){
	include 'DBConnect.php';
}$conn = getConnection();  

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$year = $_POST['year'];
$month = $_POST['month'];
if(!is_numeric($month)){ 
	$sql1 = "select * from booking where year(dateW) = '$year' ";
	$sql2 = "select * from booking where year(dateH) = '$year' ";
}else{
	$sql1 = "select * from booking where year(dateW) = '$year' AND month(dateW) = '$month' ";
	$sql2 = "select * from booking where year(dateH) = '$year' AND month(dateH) = '$month' ";
}


$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$allList =  array();
if ($result1->num_rows > 0) { 
    while($row = $result1->fetch_assoc()) {
		$arr = array('ID' => $row["ID"], 'name' => $row["name"], 'date' => $row["dateW"], 'time' => $row["timeW"], 'type' => 'Wedd');
		array_push($allList,$arr); 
    }
	
} else {
  //  echo "0 results wedding day";
}
if ($result2->num_rows > 0) { 
    while($row = $result2->fetch_assoc()) {
		$arr = array('ID' => $row["ID"], 'name' => $row["name"], 'date' => $row["dateH"], 'time' => $row["timeH"], 'type' => 'Home');
		array_push($allList,$arr); 
    }
	
} else {
   // echo "0 results homecoming day";
}


echo json_encode($allList);
$conn->close();
?>