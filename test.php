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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Bracket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        .bracket {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .round {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }

        .match {
            display: flex;
            align-items: center;
            margin: 10px;
            padding: 10px;
            border: 2px solid #6c63ff;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .match:hover {
            transform: scale(1.02);
        }

        .team {
            flex: 1;
            text-align: center;
            padding: 5px;
        }

        .vs {
            flex: 1;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Tournament Bracket</h1>

    <div class="bracket">
        <div class="round">
            <div class="match">
                <div class="team">Team A</div>
                <div class="vs">vs</div>
                <div class="team">Team B</div>
            </div>
            <div class="match">
                <div class="team">Team C</div>
                <div class="vs">vs</div>
                <div class="team">Team D</div>
            </div>
        </div>
        <div class="round">
            <div class="match">
                <div class="team">Winner of Match 1</div>
                <div class="vs">vs</div>
                <div class="team">Winner of Match 2</div>
            </div>
        </div>
        <!-- Add more rounds and matches as needed -->
    </div>
</body>
</html>


