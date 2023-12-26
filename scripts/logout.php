<?php 
session_start();
session_unset();
session_destroy();

include(__DIR__ . "/utils.php");
$base_url = getBaseURL();

header("Location: ".$base_url."login.php");
exit;
?>