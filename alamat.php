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
  <title>Alamat Sekolah | SMAN 5 Malang</title>
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
          </svg> <span>&nbsp;Profil</span></div> <span>></span> <span>Alamat Sekolah</span>
      </div>

      <!-- CONTENT -->
      <div class="mt-8">
        <h4 class="font-semibold text-2xl">Alamat Sekolah</h4>
        <article class="mt-12">
          <div class="flex flex-col lg:flex-row gap-8 lg:gap-20 justify-between items-center">
            <div>
              <h5>Informasi Alamat dan Kontak SMA Negeri 5 Kota Malang</h5>
              <div class="relative overflow-x-auto mt-4 rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                  <tbody>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Jalan
                      </th>
                      <td class="px-6 py-4">
                        Jl. Tanimbar No. 24
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Kelurahan
                      </th>
                      <td class="px-6 py-4">
                        Kasin
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Kecamatan
                      </th>
                      <td class="px-6 py-4">
                        Klojen
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Kota
                      </th>
                      <td class="px-6 py-4">
                        Malang
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Provinsi
                      </th>
                      <td class="px-6 py-4">
                        Jawa Timur
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Kode POS
                      </th>
                      <td class="px-6 py-4">
                        65117
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Nomor Telepon
                      </th>
                      <td class="px-6 py-4">
                        (0341) 364580
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Alamat Email
                      </th>
                      <td class="px-6 py-4">
                        inbox@sman5malang.sch.id
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Nomor WhatsApp
                      </th>
                      <td class="px-6 py-4">
                        +62 812-9700-0956
                      </td>
                    </tr>
                    <tr class="bg-white border-b">
                      <th rowspan="2" scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                        Jam Kerja
                      </th>
                      <td class="px-6 py-4">
                        <span class="font-medium">Hari Kerja:</span> 07:00 - 15:00
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td class="px-6 py-4"><span class="font-medium">Hari Sabtu:</span> 07:00 - 12:00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="w-full max-w-[600px]">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.094065773706!2d112.62345077575293!3d-7.989222079676713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b72e12e47%3A0x2b283d7c7ab70f7f!2sState%20Senior%20High%20School%205%20Malang!5e0!3m2!1sen!2sid!4v1703506156094!5m2!1sen!2sid"
                class="w-full h-[450px]" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </article>
      </div>
    </div>
  </main>
  <?php
  show_footer();
  ?>
</body>

</html>