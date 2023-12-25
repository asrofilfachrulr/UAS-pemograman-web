<?php
session_start();
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
  <title>Sejarah Sekolah | SMAN 5 Malang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="https://sman5malang.sch.id/wp-content/uploads/2021/09/cropped-cropped-logo-32x32.jpg"
    sizes="32x32">
    <style>
    body {
      font-family: Inter, sans-serif;
    }

    .has-caret-down {
      position: relative;
      margin-inline-end: 14px;
    }

    .has-caret-down::after {
      content: "▾";
      position: absolute;
      font-size: 0.65rem;
      color: white;
      top: 50%;
      right: -14px;
      transform: translateY(-50%);
    }

    li:has(.nav-links) {
      position: relative;
      height: 100%;
      display: flex;
      align-items: center;
      padding-inline: 1rem;
      cursor: pointer;
      transition: all 200ms ease-in-out;
    }

    li:has(.nav-links):hover {
      background: #005DD4;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 0;
      background-color: white;
      border: 1px solid #787878;
      transition: all 200ms ease-in-out;
      font-size: 0.9rem;
    }

    li:has(.nav-links):hover .dropdown-menu,
    .dropdown-menu:hover {
      display: inline-block;
      top: 60px;
      min-width: 100%;
      width: max-content;
      max-width: 160px;
      height: fit-content;
    }

    .dropdown-menu ul {
      display: flex;
      flex-direction: column;
    }

    .dropdown-menu li {
      width: 100%;
      padding: 1rem;
    }

    .dropdown-menu li:hover {
      background-color: #005DD4;
      color: white;
    }

    section {
      margin-block: 1rem;
      line-height: 2;
      color: #4d5156;
    }
  </style>
</head>

<body>
  <header>
    <div class="w-full px-4 md:px-0 md:max-w-5xl mx-auto my-8">
      <div class="flex justify-start items-end gap-4">
        <img class="w-16 h-auto" src="https://sman5malang.sch.id/wp-content/uploads/2021/09/logo-1.jpg"
          alt="school logo">
        <div>
          <p class="font-semibold text-2xl">SMAN 5 Malang</p>
          <p class="text-sm">Jl. Tanimbar No.24, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</p>
        </div>
      </div>
    </div>
    <nav>
      <div class="w-full bg-[#020031]">
        <ul class="flex w-full md:max-w-5xl min-h-[60px] flex-wrap justify-between items-center mx-auto">
          <div class="left h-[60px] flex gap-14">
            <li>
              <a class="text-white nav-links nav-links-start has-caret-down text-sm font-sans font-semibold"
                href="#">Profil</a>
              <div class="dropdown-menu">
                <ul>
                  <li><a class="font-sans font-semibold" href="./index.php">Sambutan Kepala Sekolah</a></li>
                  <li><a class="font-sans font-semibold" href="./sejarah.php">Sejarah Sekolah</a></li>
                  <li><a class="font-sans font-semibold" href="./fasilitas.php">Fasilitas Sekolah</a></li>
                  <li><a class="font-sans font-semibold" href="./alamat.php">Alamat Sekolah</a></li>
                </ul>
              </div>
            </li>
            <?php
            if (isset($_SESSION["username"])) {
              $username = $_SESSION["username"];
              if ($username == "admin") {
                echo <<<HTML
                <li><a class="text-white nav-links has-caret-down text-sm font-sans font-semibold" href="#">Input Data</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li><a class="font-sans font-semibold" href="">Siswa</a></li>
                      <li><a class="font-sans font-semibold" href="">Guru/Staff</a></li>
                    </ul>
                  </div>
                </li>
                HTML;
              }

              echo <<<HTML
              <li><a class="text-white nav-links has-caret-down text-sm font-sans font-semibold" href="#">Tabel Data</a>
                <div class="dropdown-menu">
                  <ul>
                    <li><a class="font-sans font-semibold" href="">Siswa</a></li>
                    <li><a class="font-sans font-semibold" href="">Guru/Staff</a></li>
                  </ul>
                </div>
              </li>
              <li><a class="text-white nav-links has-caret-down text-sm font-sans font-semibold" href="#">Pesan dan
                  Kesan</a>
                <div class="dropdown-menu">
                  <ul>
                    <li><a class="font-sans font-semibold" href="">Buat Pesan dan Kesan</a></li>
                    <li><a class="font-sans font-semibold" href="">Lihat Pesan dan Kesan</a></li>
                  </ul>
                </div>
              </li>
              HTML;
            } else {
              echo <<<HTML
              <li><a class="text-white nav-links text-sm font-sans font-semibold" href="#">Lihat Pesan dan
                  Kesan</a>
              </li>
              HTML;
            }
            ?>
          </div>

          <div class="right h-[60px] flex justify-end">
            <?php
            if (isset($_SESSION["fullname"])) {
              $fullname = $_SESSION["fullname"];

              echo <<<HTML
                <li class="max-w-[220px]" ><a class="text-white nav-links nav-links-end has-caret-down text-sm font-sans font-semibold text-ellipsis" href="">
                $fullname
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li><a class="font-sans font-semibold" href="">Profil</a></li>
                  <li><a class="font-sans font-semibold" href="./scripts/logout.php">Keluar</a></li>
                </ul>
              </div>
            </li>
            HTML;
            } else {
              echo <<<HTML
                <li class="max-w-[220px]" ><a class="text-white nav-links nav-links-end text-sm font-sans font-semibold text-ellipsis" href="./login.php">
                Masuk
              </a>
              HTML;
            }
            ?>
          </div>
        </ul>
      </div>
    </nav>
  </header>
  <main class="pb-[150px]">
    <div class="w-full max-w-5xl mx-auto px-4 md:px-0">
      <!-- BREADCRUMBS -->
      <div class="mt-12 p-1 flex items-end gap-4 text-sm font-semibold">
        <div class="flex items-end gap-1"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
            viewBox="0 0 24 24" class="inline">
            <path
              d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z">
            </path>
          </svg> <span>&nbsp;Profil</span></div> <span>></span> <span>Sejarah Sekolah</span>
      </div>

      <!-- CONTENT -->
      <div class="mt-8">
        <h4 class="font-semibold text-2xl">Sejarah Sekolah</h4>
        <img class="mx-auto my-8" src="./assets/aerial-view-sman5.jpg" alt="">
        <article class="mt-4">
          <section>
            <span class="text-5xl me-1">B</span>erdasarkan SK Mendikbud No. 96/SK/13/III/1965, SMA Negeri 5 Malang
            ditetapkan berdiri berdasarkan
            tanggal 13 September 1965. Sebelum berlokasi di Jalan Tanimbar nomor 24 Kota Malang, proses belajar mengajar
            SMA Negeri 5 Malang dilaksanakan di SMA Negeri 3 Malang. Hal tersebut terjadi karena SMA Negeri 5 Malang
            merupakan filial (cabang sekolah) dari SMA Negeri 3 Malang.
          </section>
          <section>
            <span class="font-semibold">Pada tahun 1965</span>, setelah terjadinya peristiwa G30/PKI, SMA Negeri 5
            Malang dipindahkan ke Gedung sekolah MA
            Chung. Hal ini dilatarbelakangi oleh pengambilalihan gedung sekolah milik etnis Cina oleh Pemerintah Kota
            Malang. Sejak tahun 1965 sampai sekarang SMA Negeri 5 Malang menempati gedung tersebut yang beralamatkan di
            jalan Tanimbar No 24 Kota Malang.
          </section>
          <section>
            <span class="font-semibold">Pada tahun 2007</span>, Kementrian Pendidikan Nasional melalui Direktorat
            Pembinaan SMA memberi kesempatan kepada
            SMA Negeri 5 Malang sebagai Rintisan Sekolah Menengah Atas Bertaraf Internasional (R-SMA-BI). Selayaknya
            R-SMA-BI lainnya, SMA Negeri 5 Malang menggunakan bahasa Inggris sebagai bahasa pengantar dalam
            Pembelajaran.
          </section>
          <section>
            <span class="font-semibold">Pada tahun 2009</span>, SMA Negeri 5 Malang dinobatkan menjadi juara pertama (I)
            Lomba Lingkungan Sekolah Sehat
            (LSS) tingkat Nasional. Selang satu tahun kemudian, yaitu pada tahun 2010 SMA Negeri 5 Malang kembali
            mendapat pengakuan secara nasional menjadi sekolah Adiwiyata sebagai sekolah berwawasan lingkungan.
          </section>
          <section>
            <span class="font-semibold">Pada tahun 2015</span>, SMA Negeri 5 Malang ditunjuk sebagai sekolah induk
            klaster pendampingan implementasi
            Kurikulum 2013 dan sebagai sekolah model oleh Direktorat Pembinaan SMA, Kementerian Pendidikan dan
            Kebudayaan. Penunjukkan tersebut tidak terlepas dengan prestasi SMA Negeri 5 Malang selama ini.
          </section>
          <section>
            SMA Negeri 5 Malang memiliki motto: <span class="font-semibold">Dharme Kyastu Yogya</span>, Dharme berasal
            dari kata
            darma (mendarmakan), Kyastu berarti kesungguhan (sepenuh hati), dan Yogya berarti keserderhanaan. Makna
            secara keseluruhan moto tersebut adalah <span class="font-semibold">
              sifat sederhana dan rendah hati merupakan landasan untuk berdarma
              bakti.
            </span>
          </section>
        </article>
      </div>
    </div>
  </main>
  <footer>
    <div class="bg-[#005DD4] w-full text-white">
      <div class="w-full px-4 lg:px-0 md:max-w-5xl mx-auto">
        <div class="flex flex-wrap justify-between items-center min-h-[80px]">
          <div class="left flex gap-8">
            <div class="flex flex-col justify-center items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
              </svg>
              <a class="text-sm font-semibold" href="mailto:inbox@sman5malang.sch.id">inbox@sman5malang.sch.id</a>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg>
              <a class="text-sm font-semibold" href="tel:+62341364580">(0341) 364580</a>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
              </svg>
              <a class="text-xs font-semibold text-center"
                href="https://maps.google.com/maps?ll=-7.988962,112.626026&z=18&t=m&hl=en-GB&gl=US&mapclient=apiv3&cid=3109803147543383935"
                target="_blank">Jl. Tanimbar No. 24 Kasin, Kec. Klojen, <br> Kota Malang, Jawa Timur. 65117</a>
            </div>
          </div>
          <div class="right">
            <ul class="flex justify-end gap-4">
              <li><a target="_blank" href="https://www.instagram.com/sman5malang/"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                  </svg></a></li>
              <li><a target="_blank" href="https://www.youtube.com/@sman5malangofficial"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube"
                    viewBox="0 0 16 16">
                    <path
                      d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408z" />
                  </svg></a></li>
              <li><a target="_blank" href="https://twitter.com/dhamysoga"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15" />
                  </svg></a></li>
              <li><a target="_blank" href="https://asrofilfachrulr.github.io/tugas-pemogramanweb-week4/#"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
                    viewBox="0 0 16 16">
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                  </svg></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full bg-[#062A58] text-white">
      <div class="mx-auto px-4 lg:px-0 w-full lg:max-w-5xl min-h-[50px] flex justify-center items-center">
        <p class="font-medium text-sm">Copyright Asrofil Fachrul Riidlo ©2023 All rights are not lefts | Design Inspired
          by <a class="underline" href="https://sman13padang.sch.id/" target="_blank">sman13padang.sch.id</a></p>
      </div>
    </div>
  </footer>
</body>

</html>