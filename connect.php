<?php

// Database connection parameters
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "66_501-03";

// Create a database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>	

