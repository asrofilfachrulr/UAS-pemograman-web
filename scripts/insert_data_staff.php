<?php 
session_start();
require_once(__DIR__."/session_check.php");
session_check_endpoint_admin_only("input-data-staff.php");

if(isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $employee_number = $_POST["employee_number"];
  $role_name = $_POST["role_name"];
  $address = $_POST["address"];
  $last_edu = $_POST["last_edu"];
  $teaching_history = $_POST["teaching_history"];

  if(empty($fullname) || empty($employee_number) || empty($role_name) || empty($last_edu) || empty($teaching_history) || empty($address)){
    echo "<p>invalid data</p>";
    exit;
  }

  include(__DIR__."/../config/db.php");
  try {
    $stmt = $conn->prepare("INSERT INTO employee (`name`, `employee_number`, `address`, `role_name`, `last_edu`, `teaching_history`) VALUES(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissss", $fullname, $employee_number, $address,  $role_name, $last_edu, $teaching_history);
    $stmt->execute();
  
    if($stmt->affected_rows == 0){
      throw new Exception("unable to insert new employee data");
    }

    require_once(__DIR__."/utils.php");
    $base_url = getBaseURL();
    header("Location: ". $base_url ."tabel-staff.php?msg=postSuccess");
  } catch(Exception $e) {
    echo "<p>". $e->getMessage() ."</p>";
  } finally {
    $stmt->close();
    $conn->close();
  }
}
?>