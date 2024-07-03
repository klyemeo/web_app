<?php   



$ID=$_POST["SportsID"];
$Name=$_POST["SportsName"];
$category = $_POST["Sportscategory"];
$result = $_POST["Sportsresult"];
$score = $_POST["Sportsscore"];

error_reporting(~E_NOTICE);


include "connect.php";
//$sql="insert into tbl_result_in values(null,'$anime_name','$detail')";
$sql= "insert into tbl_result_in (`ID`, `Name`, `category`, `result`, `score`) VALUES('$ID','$Name','$category','$result','$score')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$result=$c->query($sql);

//header( "location:show-data.php" );  exit(0);
//mysqli_close($c);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success - Purple Theme</title>
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
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        p {
            margin-top: 10px;
            font-size: 18px;
        }

        a {
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
            font-weight: bold;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
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
        <h1>Success!</h1>
        <p>Data has been added successfully.</p>
        <a href="table-datatable.php">Back to Data Table</a>
    </div>
</body>
</html>