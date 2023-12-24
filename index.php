<?php
  include("./scripts/session_check.php");

  session_check_for_protected();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap"
    rel="stylesheet">
  <title>SMAN 5 Malang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="https://sman5malang.sch.id/wp-content/uploads/2021/09/cropped-cropped-logo-32x32.jpg"
    sizes="32x32">
</head>

<body>
  <p><?php echo $_SESSION["user_id"]; ?></p>
  <p class="text-lg">Hello <?php echo $_SESSION["username"]; ?></p>
  <a href="./scripts/logout.php" class="text-blue-800">Logout</a>
</body>

</html>