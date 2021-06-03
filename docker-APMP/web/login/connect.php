<?php

$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "login";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Error No.".$conn->connect_errno." - Unable to connect to MySQL: ".$conn->connect_error);
}
//echo "Connected successfully<br>";

//$conn->close();
?>