<?php 
session_start();
include("./scripts/session_check.php");
session_check_endpoint_admin_only("form-edit-data-staff.php");

echo "form edit staff id=".$_GET["id"]."";

?>