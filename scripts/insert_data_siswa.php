<?php 
session_start();
require_once(__DIR__."/session_check.php");
session_check_endpoint_admin_only("input-data-siswa.php");

if(isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $student_number = $_POST["student_number"];
  $address = $_POST["address"];
  $entry_year = $_POST["entry_year"];
  $prev_school = $_POST["prev_school"];

  if(empty($fullname) || empty($student_number) || empty($entry_year) || empty($prev_school) || empty($address)){
    echo "<p>invalid data</p>";
    exit;
  }

  include(__DIR__."/../config/db.php");
  try {
    $stmt = $conn->prepare("INSERT INTO students (`name`, `student_number`, `address`, `entry_year`, `prev_school_name`) VALUES(?, ?, ?, ?, ?)");
    $stmt->bind_param("sisis", $fullname, $student_number, $address,  $entry_year, $prev_school);
    $stmt->execute();
  
    if($stmt->affected_rows == 0){
      throw new Exception("unable to insert new student data");
    }

    require_once(__DIR__."/utils.php");
    $base_url = getBaseURL();
    header("Location: ". $base_url ."tabel-siswa.php?msg=postSuccess");
  } catch(Exception $e) {
    echo "<p>". $e->getMessage() ."</p>";
  } finally {
    $stmt->close();
    $conn->close();
  }
}
?>