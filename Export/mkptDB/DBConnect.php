<?php
 
	function getConnection(){
		$servername = "localhost";
		$usernameDB = "id2376393_mkptdb";
		$passwordDB = "12qw!@QW";
		$dbname = "id2376393_db_bookings"; 
	  
		$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
		
		return $conn;
	}
  
?>