<?php
include("../config/db.php");

if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $id = 0;
  $hashed_password = "";
  $fullname = "";

  $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE username = ?");

  if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
  }

  $stmt->bind_param("s", $username);

  if ($stmt->execute()) {
    $stmt->bind_result($id, $fullname, $hashed_password);
    $stmt->fetch();

    $stmt->free_result();
    $stmt->close();

    if (password_verify($password, $hashed_password)) {
      session_start();
      $_SESSION["username"] = $username;
      $_SESSION["user_id"] = $id;
      $_SESSION["fullname"] = $fullname;

      header("Location: ../index.php");
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