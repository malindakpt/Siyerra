<?php
 
	function getConnection(){
		$servername = "localhost";
		$usernameDB = "photogra_admin";
		$passwordDB = "12qw!@QW";
		$dbname = "photogra_db"; 
	  
		$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
		
		return $conn;
	}
  
?>