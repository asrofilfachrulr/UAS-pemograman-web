<?php
$servername = "127.0.0.1";
$database_name = "sman_5_malang";
$db_username = "admin";
$db_password = "rahasia";

$conn = mysqli_connect($servername, $db_username, $db_password, $database_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>