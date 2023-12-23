<?php
$servername = "127.0.0.1";
$database = "sman_5_malang";
$username = "admin";
$password = "rahasia";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);
?>