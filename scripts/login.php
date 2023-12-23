<?php
include("../config/db.php");
$DEFAULT_PASSWORD = "password";

if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $id = 0;
  $hashed_password = "";
  $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");

  if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
  }

  $stmt->bind_param("s", $username);

  if ($stmt->execute()) {
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
      if (CRYPT_SHA256 == 1) {
        $cookie_data = crypt($id, "seasalt");
        setcookie("sman5_mlg_token", $cookie_data, time()+1800, "/");
        header("Location: ../index.php");
      }
    } else {
      header("Location: ../login.php?error=wrongCredential");
    }
  } else {
    die("Error executing the query: " . $stmt->error);
  }

  mysqli_close($conn);
} else {
  header("Location: ../login.php?error=fieldError");
}
?>