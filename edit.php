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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the record to edit
    $sql = "SELECT * FROM tbl_result_in WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

// Handle form submission for editing here
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated values from the form
    $newName = $_POST['newName'];
    $newCategory = $_POST['newCategory'];
    $newResult = $_POST['newResult'];
    $newScore = $_POST['newScore'];
    
    // Update the record in the database
    $updateSql = "UPDATE tbl_result_in SET Name = '$newName', category = '$newCategory', result = '$newResult', score = '$newScore' WHERE ID = $id";
    
    if ($conn->query($updateSql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <style>
        body {
            background-color: #8a63d2; /* Purple background color */
            color: #fff ; /* White text color */
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #3b1e6d; /* Dark purple container background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #ff6b6b; /* Red submit button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #e74c3c; /* Darker red on hover */
        }
        /* Add animation for a subtle hover effect */
        input[type="submit"] {
            transition: background-color 0.3s ease;
        }
        h1 {
            text-align: center;
        }
	

    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Record</h1>
        <form method="POST">
            <label for="newName">Name:</label>
            <input type="text" name="newName" value="<?php echo $row['Name']; ?>" required><br>

            <label for="newCategory">Category:</label>
            <input type="text" name="newCategory" value="<?php echo $row['category']; ?>" required><br>

            <label for="newResult">Result:</label>
            <input type="text" name="newResult" value="<?php echo $row['result']; ?>" required><br>

            <label for="newScore">Score:</label>
            <input type="text" name="newScore" value="<?php echo $row['score']; ?>" required><br>

            <input type="submit" value="Save" >
			<a href="table-datatable.php" style="color: #fff; text-decoration: none; display: block; text-align: center;">Back to Data Table<a>
        </form>
    </div>
</body>
</html>
