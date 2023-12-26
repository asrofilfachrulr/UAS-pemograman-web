<?php 
session_start();
include("./scripts/session_check.php");
session_check_endpoint_admin_only("form-edit-data-siswa.php");

echo "form edit siswa id=".$_GET["id"]."";

?>