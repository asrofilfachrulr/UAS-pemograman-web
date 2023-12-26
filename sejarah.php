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
  <title>Sejarah Sekolah | SMAN 5 Malang</title>
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
  <?php
  show_footer();
  ?>
</body>

</html>