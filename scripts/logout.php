<?php 
session_start();
session_unset();
session_destroy();

require_once(__DIR__ . "/utils.php");
$base_url = getBaseURL();

header("Location: ".$base_url."login.php");
exit;
?>