<?php

if (isset($_POST["submit"]) && $_POST["submit"] == "Simpan") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $vpassword = $_POST["vpassword"];
  $id_account = $_POST["id_account"];

  if (empty($username) || empty($password) || empty($vpassword) || empty($id_account)) {
    echo "<p>Invalid Data</p>";
    exit;
  }

  if ($vpassword != $password) {
    echo "<p>Password Mismatch!</p>";
    exit;
  }

  include("../config/db.php");
  try {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("UPDATE `users` SET `password` = ? WHERE `username` = ? AND `id` = ?");
    $stmt->bind_param("ssi", $hashed_password, $username, $id_account);

    $stmt->execute();
  

    if ($stmt->affected_rows == 0) {
      throw new Exception("unable to update: ".$stmt->error);
    }

    require_once(__DIR__ . "/utils.php");
    $base_url = getBaseURL();

    header("Location: " . $base_url . "login.php");
  } catch (Exception $e) {
    echo "<p>" . $e->getMessage() . "</p>";
  } finally {
    $stmt->close();
    $conn->close();
  }
}
?>