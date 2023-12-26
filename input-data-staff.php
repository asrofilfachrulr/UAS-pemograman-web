<?php
session_start();

include("./scripts/session_check.php");
session_check_endpoint_admin_only("input-data-staff.php");

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
  <title>Input Data Staff & Guru | SMAN 5 Malang</title>
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
            fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
            <path
              d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5zM3 12v-2h2v2zm0 1h2v2H4a1 1 0 0 1-1-1zm3 2v-2h3v2zm4 0v-2h3v1a1 1 0 0 1-1 1zm3-3h-3v-2h3zm-7 0v-2h3v2z" />
          </svg><span>&nbsp;Input Data</span></div> <span>></span> <span>Staff & Guru</span>
      </div>

      <div class="mt-8">
        <h4 class=" font-semibold">Input Data Staff & Guru</h4>
        <p class="font-light text-sm mt-2">Masukan data staff/guru dibawah ini dengan benar</p>
        <form class="mt-8" method="POST" action="./scripts/insert_data_staff.php">
          <div class="mb-6">
            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Nama Panjang <span
                class="font-extralight text-xs text-gray-950">(beserta gelar)</span></label>
            <input type="text" id="fullname"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Dr. Asep Surasep, M.M." name="fullname" required>
          </div>
          <div class="grid gap-6 mb-6 md:grid-cols-2 col">
            <div>
              <label for="employee-number" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Induk Pegawai
                (NIP)</label>
              <input type="number" id="employee-number" min="100000000000000000"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="194508172019081012" name="employee_number" required>
            </div>
            <div>
              <label for="last-edu" class="block mb-2 text-sm font-medium text-gray-900 ">Pendidikan Terakhir</label>
              <select name="last_edu" id="last-edu"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1" selected>S1</option>
                <option value="S2">S2</option>
                <option value="S2">S3</option>
                <option value="SLTA">SLTA</option>
              </select>
            </div>
            <div>
              <label for="role-name" class="block mb-2 text-sm font-medium text-gray-900 ">Jabatan</label>
              <select name="role_name" id="role-name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru Tetap" selected>Guru Tetap</option>
                <option value="Guru Honorer">Guru Honorer</option>
                <option value="Staff">Staff</option>
                <option value="Waka Sarpras">Waka Sarpras</option>
                <option value="Waka Kesiswaan">Waka Kesiswaan</option>
                <option value="Waka Humas">Waka Humas</option>
                <option value="Keamanan">Keamanan</option>
                <option value="Kebersihan">Kebersihan</option>
                <option value="Lain-Lain">Lain-Lain</option>
              </select>
            </div>
            <div>
              <label for="teaching-history" class="block mb-2 text-sm font-medium text-gray-900">Riwayat Mengajar Mapel.</label>
              <input type="text" id="teaching-history"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Contoh: Bahasa Indonesia, Matematika. Jika kosong: -" name="teaching_history" required>
            </div>
          </div>
          <div class="mb-6">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat
            </label>
            <textarea rows="4" id="address"
              placeholder="Jl. Merdeka Barat No.43, Kec. Klojen, Kota Malang, Jawa Timur, 423890"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              name="address" required></textarea>
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