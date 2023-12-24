<?php 
session_start();
// redirect to login if not logged yet
function session_check_for_protected(){
  if (!(isset($_SESSION["user_id"]) && isset($_SESSION["username"]) && isset($_SESSION["fullname"]))) {
    header("Location: login.php?error=notLogged");
    exit;
  }
}

// redirect to index if already logged
function session_check_for_auth(){
  if (isset($_SESSION["user_id"]) && isset($_SESSION["username"]) && isset($_SESSION["fullname"])) {
    header("Location: index.php");
    exit;
  }
}

?>