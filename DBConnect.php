<?php
 
	function getConnection(){
		$servername = "localhost";
		$usernameDB = "root";
		$passwordDB = "";
		$dbname = "db_bookings"; 
	  
		$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
		
		return $conn;
	}
  
?>