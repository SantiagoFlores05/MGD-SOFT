<?php

$servername = "localhost";
$username = "id16476179_sofia";
$password = "^%tgrzA^>h3[)3F";
$database = "id16476179_login_register_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>