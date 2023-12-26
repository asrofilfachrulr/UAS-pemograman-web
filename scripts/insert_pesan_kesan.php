<?php
session_start();
include("./session_check.php");
session_check_endpoint_logged_only("input-pesan-kesan.php");

if (isset($_POST["submit"])) {
  $fullname = $_POST["fullname"];
  $class = $_POST["class"];
  $message = $_POST["message"];
  $impression = $_POST["impression"];

  if (!(empty($fullname) || empty($class) || empty($message) || empty($impression))) {
    include("../config/db.php");
    try {
      $stmt = $conn->prepare("INSERT into msgs_n_impressions (`name`, `class`, `message`, `impression`) VALUES (?, ?, ?, ?)");

      $stmt->bind_param("ssss", $fullname, $class, $message, $impression);
      $stmt->execute();
      
      if($stmt->affected_rows == 0) {
        throw new Exception("unable to insert new impression");
      }

      header("Location: ../pesan-kesan.php?msg=postSuccess");
    } catch (Exception $e) {
      echo '
        <p>Invalid Data: ' . $e->getMessage() . '</p>
      ';
    } finally {
      $stmt->close();
      $conn->close();
    }

  } else {
    echo '
        <p>Invalid Data</p>
      ';
  }
}
?>