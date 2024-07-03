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

if (isset($_GET['remove'])) {
    $id_to_remove = $_GET['remove'];
    $sql_remove = "DELETE FROM tbl_result_in WHERE ID = $id_to_remove";
    if ($conn->query($sql_remove) === TRUE) {
        echo "Record removed successfully.";
    } else {
        echo "Error removing record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record - Purple Theme</title>
    <style>
        body {
            background-color: #6c63ff;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            padding: 20px;
            background-color: #8a85ff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.5s ease-in-out;
        }

        h1 {
            text-align: center;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Record Removed Successfully</h1>
        <br>
        <a href="table-datatable.php">Back to Data Table</a>
    </div>
</body>
</html>
