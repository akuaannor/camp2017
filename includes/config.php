<?php  

$servername = "localhost";
$usern = "root";
$pass ="";
$dbname = "hgt_camp";

// create connection
$conn =new mysqli ($servername, $usern, $pass, $dbname);

// check for connection

if ($conn-> connect_error )

{
	echo "Connection not succesdful";

	// die("connection failed" . $conn->connect_error);
}


?>