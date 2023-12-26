<?php
session_start();
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
  <title>Fasilitas Sekolah | SMAN 5 Malang</title>
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
    <div class="w-full max-w-5xl mx-auto px-4 lg:px-0">
      <!-- BREADCRUMBS -->
      <div class="mt-12 p-1 flex items-end gap-4 text-sm font-semibold">
        <div class="flex items-end gap-1"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
            viewBox="0 0 24 24" class="inline">
            <path
              d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z">
            </path>
          </svg> <span>&nbsp;Profil</span></div> <span>></span> <span>Fasilitas Sekolah</span>
      </div>

      <!-- CONTENT -->
      <div class="mt-8">
        <h4 class="font-semibold text-2xl">Fasilitas Sekolah</h4>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/lab-komputer.jpg" alt="lab komputer">
            <span>Lab Komputer</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/dokter-gigi.jpg" alt="dokter-gigi">
            <span>Dokter Gigi</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/gazebo.jpg" alt="gazebo">
            <span>Gazebo</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/lab-bhs.jpg" alt="lab-bhs">
            <span>Lab Bahasa</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/lab-bio.jpg" alt="lab-bio">
            <span>Lab Biologi</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/lap-tenis.jpg" alt="lap-tenis">
            <span>Lapangan Tenis</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/perpus.jpg" alt="perpus">
            <span>Perpustakaan</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/pojok-baca.jpg" alt="pojok-baca">
            <span>Pojok Baca Literasi</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/taman.jpg" alt="taman">
            <span>Taman</span>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img class="max-w-[240px] h-auto rounded-lg transition-all hover:scale-110" src="./assets/uks.jpg" alt="uks">
            <span>UKS</span>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
  show_footer();
  ?>
</body>

</html>