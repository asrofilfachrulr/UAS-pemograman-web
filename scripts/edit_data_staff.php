<?php
session_start();
require_once(__DIR__ . "/session_check.php");
session_check_endpoint_admin_only("tabel-staff.php");

if (isset($_POST["submit"])) {
  $id = $_POST["id"];
  $fullname = $_POST["fullname"];
  $employee_number = $_POST["employee_number"];
  $role_name = $_POST["role_name"];
  $address = $_POST["address"];
  $last_edu = $_POST["last_edu"];
  $teaching_history = $_POST["teaching_history"];

  if (empty($id) || empty($fullname) || empty($employee_number) || empty($last_edu) || empty($teaching_history) || empty($address) || empty($role_name)) {
    echo "<p>invalid data</p>";
    exit;
  }

  include(__DIR__ . "/../config/db.php");
  try {
    $stmt = $conn->prepare("UPDATE employee SET `name` = ?, `employee_number` = ?, `address` = ?, `last_edu` = ?, `teaching_history` = ?, `role_name` = ? WHERE id = ?");
    $stmt->bind_param("sissssi", $fullname, $employee_number, $address, $last_edu, $teaching_history, $role_name, $id);
    $stmt->execute();

    if ($stmt->affected_rows == 0) {
      throw new Exception("unable to update employee data id = ".$id);
    }

    require_once(__DIR__ . "/utils.php");
    $base_url = getBaseURL();
    header("Location: " . $base_url . "tabel-staff.php?msg=editSuccess");
  } catch (Exception $e) {
    echo "<p>" . $e->getMessage() . "</p>";
  } finally {
    $stmt->close();
    $conn->close();
  }
}
?>