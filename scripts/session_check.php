<?php
session_start();
// redirect to login if not logged yet if visit protected endpoint
function session_check_endpoint_logged_only($redirect_url)
{
  if (!(isset($_SESSION["user_id"]) && isset($_SESSION["username"]) && isset($_SESSION["fullname"]))) {
    $location_url = "login.php?error=notLogged";

    if (!empty($redirect_url))
      $location_url .= "&redirect=" . urlencode($redirect_url);

    header("Location: " . $location_url);
    exit;
  }
}

// as function name suggests
function session_check_endpoint_admin_only($redirect_url)
{
  $location_url = "login.php?error=adminOnly";

  if (!empty($redirect_url))
    $location_url .= "&redirect=" . urlencode($redirect_url)."&mustLogin=1";

  if (!(isset($_SESSION["user_id"]) && isset($_SESSION["username"]) && isset($_SESSION["fullname"]))) {
    header("Location: " . $location_url);
    exit;
  } else if (isset($_SESSION["user_id"]) && isset($_SESSION["username"]) && isset($_SESSION["fullname"])) {
    if ($_SESSION["username"] != "admin" || $_SESSION["user_id"] != 1) {
      header("Location: " . $location_url);
      exit;
    }
  } else {
    header("Location: " . $location_url);
    exit;
  }
}

// redirect to index if already logged
function session_check_for_auth()
{
  if (isset($_SESSION["user_id"]) && isset($_SESSION["username"]) && isset($_SESSION["fullname"])) {
    if(!isset($_GET["mustLogin"]) && $_GET["mustLogin"] != "1"){
      header("Location: index.php"); 
      exit;
    }
  }
}

?>