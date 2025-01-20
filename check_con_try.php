<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms_p1";
$port = 3306; // Replace PORT_NUMBER with the actual port number

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
