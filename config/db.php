<?php
$servername = "127.0.0.1";
$database = "sman_5_malang";
$username = "admin";
$password = "rahasia";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>