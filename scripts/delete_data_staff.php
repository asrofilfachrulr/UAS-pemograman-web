<?php
session_start();
require_once(__DIR__ . "/session_check.php");
session_check_endpoint_admin_only("tabel-staff.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  if (empty($id)) {
    echo "<p> missing id </p>";
    exit;
  }

  include(__DIR__ . "/../config/db.php");

  try {
    $stmt = $conn->prepare("DELETE FROM employee WHERE id = ?");
    $stmt->bind_param("i", $id);

    $stmt->execute();
    $stmt->store_result();

    if ($stmt->affected_rows == 0) {
      throw new Exception("<p> failed to delete employee id = ".$id." </p>");
    }

    require_once(__DIR__ . "/utils.php");
    $base_url = getBaseURL();
    header("Location: " . $base_url . "tabel-staff.php?msg=deleteSuccess");
  } catch (Exception $e) {
    echo "" . $e->getMessage() . "";
  } finally {
    $stmt->free_result();
    $stmt->close();
    $conn->close();
  }
} else {
  echo "<p> missing id </p>";
}
?>