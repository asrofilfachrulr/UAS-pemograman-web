<?php
session_start();
include("./scripts/session_check.php");
session_check_endpoint_logged_only("tabel-siswa.php");

include("./components/navbar.php");
include("./components/footer.php");
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
  <title>Buat Pesan Kesan | SMAN 5 Malang</title>
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
    <div class="w-full max-w-5xl mx-auto px-4 md:px-8 lg:px-0">
      <!-- BREADCRUMBS -->
      <div class="mt-12 p-1 flex items-end gap-3 text-sm font-semibold">
        <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-envelope-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
          </svg> <span>&nbsp;Pesan dan Kesan</span></div> <span>></span> <span>Buat</span>
      </div>

      <div class="mt-12">
        <h4 class=" font-semibold">Membuat Pesan dan Kesan Anda terhadap SMAN 5 Malang</h4>
        <form class="mt-8" method="POST" action="./scripts/insert_pesan_kesan.php">
          <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
              <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Nama Panjang</label>
              <input type="text" id="fullname"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Asep Surasep" name="fullname" required>
            </div>
            <div>
              <label for="class" class="block mb-2 text-sm font-medium text-gray-900 ">Kelas</label>
              <input type="text" id="class"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="12 IPA 4" name="class" required>
            </div>
          </div>
          <div class="mb-6">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Pesan
            </label>
            <textarea rows="4" id="message"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              name="message" required></textarea>
          </div>
          <div class="mb-6">
            <label for="impression" class="block mb-2 text-sm font-medium text-gray-900 ">Kesan
            </label>
            <textarea rows="4" id="impression"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              name="impression" required></textarea>
          </div>
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" value="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </main>
  <?php
  show_footer();
  ?>
</body>

</html>