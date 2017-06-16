<?php
 
	function getConnection(){
		$servername = "localhost";
		$usernameDB = "id1983115_siyerradb";
		$passwordDB = "12qw!@QW";
		$dbname = "id1983115_db_bookings"; 
	  
		$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
		
		return $conn;
	}
  
?>