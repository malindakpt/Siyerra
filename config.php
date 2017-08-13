<?php
//update 1 place

function getProperty($property){ //function parameters, two variables.
		// Create connection 
		if(!function_exists('getConnection')){
			include 'DBConnect.php';
		}$conn = getConnection();  

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "select * from config where Property = '$property'";
		$result = $conn->query($sql);
		$arr =  array();

		if ($result->num_rows > 0) { 
			if($row = $result->fetch_assoc()) {
				return $row["Value"]; 
			}
		} else { 
			return "N/A";
		}
		$conn->close();
}
?>