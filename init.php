<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>AXIS SERVICES</title>
        <style>
            body {
                margin_top: 200px;
                margin-left: 200px;
                margin-right: 200px;
                font-family: Calibri;
                background-color: azure;
            }
        table, th, td {
            margin: 20px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
            h1{
                font-size: 40px;
            }
       th {
            color: white;
            background-color: black;
        }

        </style>
    </head>
    <body>
<?php
$servername = "127.0.0.1";
$username   = "test2";
$password   = "nanodesu";
$dbname     = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE myDB";
mysqli_query($conn, $sql);



$sql = " CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		name VARCHAR(30) NOT NULL,
		address VARCHAR(100),
		telp VARCHAR(20),
		email VARCHAR(30)
)";

mysqli_query($conn,$sql);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header("Location: " . $_SERVER['PHP_SELF']);
}

?>
   </body>

</html>