<?php
session_start();

require_once("./scripts/session_check.php");
session_check_endpoint_admin_only("tabel-siswa.php");

if (!isset($_GET["id"])) {
  echo "<p>id is missing</p>";
  exit;
}

include("./config/db.php");
try {
  $stmt = $conn->prepare("SELECT `name`, `student_number`, `address`, `entry_year`, `prev_school_name` FROM students WHERE id = ?");
  $stmt->bind_param("i", $_GET["id"]);
  $stmt->execute();
  
  $stmt->store_result();

  if($stmt->num_rows == 0){
    throw new Exception("Cant find student data for id = ".$_GET["id"]);
  }

  $stmt->bind_result($name, $student_number, $address, $entry_year, $prev_school);
  
  $stmt->fetch();
  

  require_once("./components/navbar.php");
  require_once("./components/footer.php");
} catch (Exception $e) {
  echo "<p>". $e->getMessage() ."</p>";
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
  <title>Edit Data Siswa | SMAN 5 Malang</title>
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
    <div class="mx-auto w-full max-w-5xl px-4 md:px-8 lg:px-0">
      <!-- BREADCRUMBS -->
      <div class="mt-12 p-1 flex items-end gap-3 text-sm font-semibold">
        <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
            <path
              d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z" />
          </svg><span>&nbsp;Tabel Data</span></div><span>></span><span><a class="underline" href="./tabel-siswa.php">Siswa</a></span><span>></span> <span>Edit</span>
      </div>

      <div class="mt-8">
        <h4 class=" font-semibold">Edit Data Siswa:
          <?php echo $name; ?>
        </h4>
        <p class="font-light text-sm mt-2">Masukan data siswa dibawah ini dengan benar</p>
        <form class="mt-8" method="POST" action="./scripts/edit_data_siswa.php">
          <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
          <div class="mb-6">
            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Nama Panjang</label>
            <input type="text" id="fullname"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Asep Surasep" name="fullname" value="<?php echo $name; ?>" required>
          </div>
          <div class="grid gap-6 mb-6 md:grid-cols-2 col">
            <div>
              <label for="student-number" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Induk Siswa
                (NIS)</label>
              <input type="number" id="student-number" min="10000" max="50000"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="14849" name="student_number" required value="<?php echo $student_number; ?>">
            </div>
            <div>
              <label for="entry-year" class="block mb-2 text-sm font-medium text-gray-900 ">Tahun Masuk</label>
              <input type="number" id="entry-year" min="2010" max="2050"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="2014" name="entry_year" value="<?php echo $entry_year; ?>" required>
            </div>
          </div>
          <div class="mb-6">
            <label for="prev-school" class="block mb-2 text-sm font-medium text-gray-900">Nama Sekolah
              Sebelumnya</label>
            <input type="text" id="prev-school"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="SMPN 12 Kota London" name="prev_school" value="<?php echo $prev_school; ?>" required>
          </div>
          <div class="mb-6">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat
            </label>
            <textarea rows="4" id="address"
              placeholder="Jl. Merdeka Barat No.43, Kec. Klojen, Kota Malang, Jawa Timur, 423890"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              name="address" required ><?php echo $address; ?></textarea>
          </div>
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
            value="submit" name="submit">Simpan</button>
        </form>
      </div>
    </div>
  </main>
  <?php
  show_footer();
  ?>
</body>

</html>