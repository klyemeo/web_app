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

// Get username and password from the form
$username = $_POST["username"];
$password = $_POST["password"];

// Perform basic authentication (for demonstration purposes)
$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Successful login
    $_SESSION["username"] = $username;
    header("Location: informdata.html");
    exit();
} else {
    // Failed login
    //header("Location: half-carousel-cover.php");
    echo "Login failed";
}

// Close the database connection

?>
