<?php
session_start();

include("./components/navbar.php");
include("./components/footer.php");

include("./config/db.php");

try {
  $stmt = $conn->prepare("SELECT name, class, message, impression FROM msgs_n_impressions");
  $stmt->execute();

  $data = array();

  $stmt->bind_result($name, $class, $message, $impression);
  while ($stmt->fetch()) {
    $data[] = array(
      "name" => $name,
      "class" => $class,
      "message" => $message,
      "impression" => $impression
    );
  }
  ;
} catch (Exception $e) {
  echo "<p> Error retrieving data: " . $e->getMessage() . "</p>";
} finally {
  $stmt->free_result();
  $stmt->close();
  $conn->close();
}
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
  <title>Pesan Kesan | SMAN 5 Malang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="https://sman5malang.sch.id/wp-content/uploads/2021/09/cropped-cropped-logo-32x32.jpg"
    sizes="32x32">
  <style>
    body {
      font-family: Inter, sans-serif;
    }

    section {
      margin-block: 1rem;
      line-height: 2;
      color: #4d5156;
    }
  </style>
  <?php
  show_navbar_styles();
  ?>
</head>

<body>
  <?php
  show_navbar();
  ?>
  <main class="pb-[150px]">
    <div class="mt-12 w-full max-w-6xl px-4 lg:px-0 mx-auto">
      <!-- BREADCRUMBS -->
      <div class="mt-12 p-1 flex items-end gap-3 text-sm font-semibold">
        <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-envelope-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
          </svg> <span>&nbsp;Pesan dan Kesan</span></div> <span>></span> <span>Lihat Pesan Kesan</span>
      </div>

      <div class="mt-12">
        <h4 class="font-semibold">Pesan Kesan Warga Sekolah terhadap SMAN 5 Malang</h4>
        <?php
        if (isset($_GET["msg"]) && $_GET["msg"] == "postSuccess") {
          echo '
            <p class="text-sm text-red-500">Pesan kesan anda berhasil disimpan</p>
            ';
        }
        ?>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mt-8 gap-8">
          <?php
          foreach ($data as $row) {
            echo '
            <div
              class="block max-w-sm p-6 bg-white border-gray-200 rounded-lg transition-all shadow border-2 hover:border-blue-500 hover:-translate-x-2 hover:-translate-y-2 text-sm">
              <h5 class="mb-2 font-bold tracking-tight text-gray-900">
              ' . $row["name"] . '
              </h5>
              <p class="font-light text-xs text-gray-700">
              (' . $row["class"] . ')
              </p>
              <p class="font-normal mt-2 text-gray-700"><span class="font-semibold">Pesan:</span> 
              ' . $row["message"] . '
              </p>
              <div class="my-4" ><hr></div>
              <p class="font-normal text-gray-700"><span class="font-semibold">Kesan:</span>
              ' . $row["impression"] . '
              </p>
            </div>            
            ';
          }
          ?>
        </div>
      </div>
    </div>
  </main>
  <?php
  show_footer();
  ?>
</body>

</html>