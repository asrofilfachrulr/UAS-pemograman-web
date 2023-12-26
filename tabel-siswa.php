<?php
session_start();
include("./scripts/session_check.php");
session_check_endpoint_logged_only("tabel-siswa.php");


include("./components/navbar.php");
include("./components/footer.php");

include("./config/db.php");

try {
  $stmt = $conn->prepare("SELECT * FROM students");
  $stmt->execute();

  $stmt->bind_result($id, $student_number, $name, $address, $entry_year, $prev_school_name);

  $students = array();
  while ($stmt->fetch()) {
    $students[] = array(
      "id" => $id,
      "student_number" => $student_number,
      "name" => $name,
      "address" => $address,
      "entry_year" => $entry_year,
      "prev_school_name" => $prev_school_name
    );
  }

} catch (Exception $e) {
  echo "SQL query error" . $e->getMessage();
}
$stmt->free_result();
$stmt->close();
$conn->close();
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
  <title>Tabel Data Siswa | SMAN 5 Malang</title>
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
    <div class="w-full max-w-7xl mx-auto px-4 md:px-12 lg:px-4 mt-12">
      <!-- BREADCRUMBS -->
      <div class="mt-12 p-1 flex items-end gap-3 text-sm font-semibold">
        <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
            <path
              d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z" />
          </svg> <span>&nbsp;Tabel Data</span></div> <span>></span> <span>Siswa</span>
      </div>
      <div class="mt-12">
        <h4 class="font-semibold text-2xl">Tabel Data Siswa</h4>
        <?php
        if (isset($_GET["msg"]) && $_GET["msg"] == "postSuccess") {
          echo '
            <p class="text-sm text-red-500">Data siswa berhasil disimpan</p>
            ';
        }
        ?>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mx-auto">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
              <tr>
                <th scope="col" class="px-6 py-3">
                  ID
                </th>
                <th scope="col" class="px-6 py-3">
                  Nomor Induk Siswa
                </th>
                <th scope="col" class="px-6 py-3">
                  Nama
                </th>
                <th scope="col" class="px-6 py-3">
                  Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                  Tahun Masuk
                </th>
                <th scope="col" class="px-6 py-3">
                  Nama Sekolah Sebelumnya
                </th>
                <?php
                echo $_SESSION["role_id"] == 1 ?
                  '<th scope="col" class="px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>' : '';
                ?>
              </tr>
            </thead>
            <tbody>
              <style>
                tr:last-of-type {
                  border: 0;
                }
              </style>
              <?php
              foreach ($students as $student) {
                echo '
                <tr class="bg-white border-b  dark:border-gray-700 hover:bg-gray-50">
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      ' . $student["id"] . '
                  </td>
                  <td class="px-6 py-4">
                      ' . $student["student_number"] . '
                  </td>
                  <td class="px-6 py-4 font-medium text-gray-900">
                      ' . $student["name"] . '
                  </td>
                  <td class="px-6 py-4">
                      ' . $student["address"] . '
                  </td>
                  <td class="px-6 py-4">
                      ' . $student["entry_year"] . '
                  </td>
                  <td class="px-6 py-4">
                      ' . $student["prev_school_name"] . '
                  </td>
                  ' . ($_SESSION["role_id"] == 1 ? '
                  <td class="px-6 py-4 text-right flex flex-col">
                    <a href="form-edit-data-siswa.php?id=' . $student["id"] . '" class="font-medium text-blue-600 hover:underline">Edit</a>
                    <a href="hapus-data-siswa.php?id=' . $student["id"] . '" class="font-medium text-red-600 hover:underline">Hapus</a>
                  </td>
                ' : '') . '</tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
  </main>
  <?php
  show_footer();
  ?>
</body>

</html>