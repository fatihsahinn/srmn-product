<?php
$servername = "localhost";
$username = "root";
$password = "";

	try {
		$baglanti = new PDO("mysql:host=$servername;dbname=sarmansoft", $username, $password);
		$baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected successfully";
		} 
	catch(PDOException $e) {
		//echo "Connection failed: " . $e->getMessage();
	}
?>
