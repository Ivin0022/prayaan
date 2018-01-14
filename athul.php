<?php
	//$servername = "mysql.fisat.ac.in";
$servername = "localhost";
	$username = "fisataci_prayaan";
	$password = "V+AkSu&Df)sD";
	$database="fisataci_prayaan";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) 
	 {
	    die("Connection failed: " . $conn->connect_error);
	}
	 echo "Connected successfully";
?>