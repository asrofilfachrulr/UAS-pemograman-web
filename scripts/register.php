<?php
session_start();
include(__DIR__ . "/utils.php");
$base_url = getBaseURL();

if (
  isset($_POST["username"]) &&
  isset($_POST["password"]) &&
  isset($_POST["vpassword"]) &&
  isset($_POST["fullname"]) &&
  isset($_POST["role"]) &&
  (
    isset($_POST["employee_number"]) ||
    isset($_POST["student_number"])
  )
) {
  include("../config/db.php");

  $username = $_POST["username"];
  $password = $_POST["password"];
  $vpassword = $_POST["vpassword"];
  $fullname = $_POST["fullname"];
  $role = $_POST["role"];
  $employee_number = $_POST["employee_number"];
  $student_number = $_POST["student_number"];


  $query = "";
  if (empty($student_number)) {
    $query = "SELECT name FROM employee WHERE employee_number = ?";
  } else {
    $query = "SELECT name FROM students WHERE student_number = ?";
  }


  // check data validity
  $stmt = $conn->prepare($query);

  if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
  }

  $bindNumber = empty($student_number) ? $employee_number : $student_number;
  $stmt->bind_param("i", $bindNumber);

  if ($stmt->execute()) {
    $stmt->store_result();
    $real_name = "";

    $stmt->bind_result($real_name);
    $stmt->fetch();

    if ($stmt->num_rows != 0) {
      $stmt->free_result();
      $stmt->close();

      if ($real_name == $fullname) {
        $query = "INSERT INTO users(`username`, `password`, `fullname`, `role_id`) VALUES (?, ?, ?, ?)";
        $role_id = 0;

        switch ($role) {
          case "student":
            $role_id = 3;
            break;
          case "teacher":
            $role_id = 4;
            break;
          case "staff":
            $role_id = 2;
            break;
          default:
            $role_id = 5;
        }

        $stmt = $conn->prepare($query);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt->bind_param("sssi", $username, $hashed_password, $fullname, $role_id);

        if ($stmt->execute()) {
          header("Location: " . $base_url . "login.php");
        } else {
          header("Location: " . $base_url . "register.php?error=SQLError");
        }
      } else {
        header("Location: " . $base_url . "register.php?error=wrongData");
      }
    } else {
      header("Location: " . $base_url . "register.php?error=unknownID");
    }
  } else {
    header("Location: " . $base_url . "register.php?error=SQLError");
  }
  $stmt->close();
  mysqli_close($conn);
}

?>