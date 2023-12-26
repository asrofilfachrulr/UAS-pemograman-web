<?php
session_start();
require_once(__DIR__ . "/session_check.php");
session_check_endpoint_admin_only("tabel-siswa.php");

if (isset($_POST["submit"])) {
  $id = $_POST["id"];
  $fullname = $_POST["fullname"];
  $student_number = $_POST["student_number"];
  $address = $_POST["address"];
  $entry_year = $_POST["entry_year"];
  $prev_school = $_POST["prev_school"];

  if (empty($id) || empty($fullname) || empty($student_number) || empty($entry_year) || empty($prev_school) || empty($address)) {
    echo "<p>invalid data</p>";
    exit;
  }

  include(__DIR__ . "/../config/db.php");
  try {
    $stmt = $conn->prepare("UPDATE students SET `name` = ?, `student_number` = ?, `address` = ?, `entry_year` = ?, `prev_school_name` = ? WHERE id = ?");
    $stmt->bind_param("sisisi", $fullname, $student_number, $address, $entry_year, $prev_school, $id);
    $stmt->execute();

    if ($stmt->affected_rows == 0) {
      throw new Exception("unable to update student data id = ".$id);
    }

    require_once(__DIR__ . "/utils.php");
    $base_url = getBaseURL();
    header("Location: " . $base_url . "tabel-siswa.php?msg=editSuccess");
  } catch (Exception $e) {
    echo "<p>" . $e->getMessage() . "</p>";
  } finally {
    $stmt->close();
    $conn->close();
  }
}
?>