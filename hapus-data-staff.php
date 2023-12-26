<?php 
session_start();
include("./scripts/session_check.php");
session_check_endpoint_admin_only("");

echo "hapus data staff id=".$_GET["id"]."";
?>