<?php
include("../config/db.php");
include(__DIR__ . "/utils.php");
$base_url = getBaseURL();
// print_r($_POST);

if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT id, fullname, password, role_id FROM users WHERE username = ?");

  if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
  }

  $stmt->bind_param("s", $username);

  if ($stmt->execute()) {
    $stmt->bind_result($id, $fullname, $hashed_password, $role_id);
    $stmt->fetch();

    $stmt->free_result();
    $stmt->close();

    if (password_verify($password, $hashed_password)) {
      session_start();
      $_SESSION["username"] = $username;
      $_SESSION["user_id"] = $id;
      $_SESSION["fullname"] = $fullname;
      $_SESSION["role_id"] = $role_id;


      if (!empty($_POST["redirect_url"])) {
        $redirect_url = $_POST["redirect_url"];
        header("Location: " . $base_url . urlencode($redirect_url));
      } else {
        header("Location: " . $base_url . "index.php");
      }
    } else {
      header("Location: " . $base_url . "login.php?error=wrongCredential");
    }
  } else {
    die("Error executing the query: " . $stmt->error);
  }

  mysqli_close($conn);
} else {
  header("Location: " . $base_url . "login.php?error=fieldError");
}
?>