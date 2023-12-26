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
  <title>Sambutan Kepala Sekolah | SMAN 5 Malang</title>
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
      <div class="mt-12 p-1 flex items-end gap-3 text-sm font-semibold">
        <div class="flex items-end gap-1"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
            viewBox="0 0 24 24" class="inline">
            <path
              d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z">
            </path>
          </svg> <span>&nbsp;Profil</span></div> <span>></span> <span>Sambutan Kepala Sekolah</span>
      </div>

      <!-- CONTENT -->
      <div class="mt-8">
        <h4 class="font-semibold text-2xl">Sambutan Kepala Sekolah</h4>
        <article class="mt-12">
          <img class="ms-8 md:mx-auto lg:float-right w-[350px] h-auto" src="./assets/kepsek.png" alt="">

          <section>
            <span class="font-semibold">Assalamualaikum Warrahmatullahi Wabarakatuh</span>
            <br>
            Yang terhormat Bapak/Ibu Guru, Staff Tata Usaha, Siswa dan Siswi yang saya cintai, serta para tamu undangan
            yang terhormat,
          </section>
          <section>
            Puji syukur kita panjatkan kehadirat Allah SWT atas limpahan rahmat dan hidayah-Nya yang senantiasa
            melimpahkan keberkahan kepada kita semua. Pada kesempatan yang berbahagia ini, izinkan saya untuk
            menyampaikan sambutan di hadapan kita semua.
          </section>

          <section>
            Sebagai Kepala Sekolah SMAN 5 Malang, saya merasa bangga dan bersyukur atas semangat, dedikasi, dan kerja
            keras yang telah kita tanamkan bersama dalam membangun prestasi dan citra kebaikan sekolah ini. SMAN 5
            Malang selalu menjunjung tinggi nilai-nilai keilmuan, karakter, dan kreativitas guna menciptakan generasi
            penerus yang unggul dan berdaya saing tinggi.
          </section>

          <section>
            Kepada seluruh Bapak dan Ibu Guru, terima kasih atas dedikasi serta komitmen yang telah diberikan dalam
            membimbing, mendidik, dan memberikan ilmu pengetahuan kepada para siswa-siswi kita. Kalian merupakan pilar
            utama dalam membentuk karakter dan kemampuan akademis mereka.
          </section>

          <section>
            Kepada seluruh siswa dan siswi yang saya cintai, jagalah semangat belajar dan prestasimu. Jadilah generasi
            yang kreatif, inovatif, serta memiliki semangat pantang menyerah dalam menggapai cita-cita. Ingatlah, kalian
            adalah harapan masa depan bangsa ini.
          </section>

          <section>
            Dalam perjalanan ke depan, mari kita terus bersama-sama membangun semangat kebersamaan, kepedulian, dan
            keunggulan, agar SMAN 5 Malang tetap menjadi tempat yang inspiratif untuk belajar dan berkembang.
          </section>

          <section>
            Terakhir, kepada para orang tua dan wali murid, terima kasih atas kepercayaan yang telah diberikan kepada
            SMAN 5 Malang. Kerjasama kita adalah kunci keberhasilan dalam mencetak generasi yang tangguh dan
            berkualitas.
          </section>

          <section>
            Sekian sambutan dari saya, mari kita bersama-sama berupaya untuk terus meningkatkan prestasi dan berkarya
            demi masa depan yang lebih baik. Semoga Allah SWT senantiasa memberikan kemudahan dan keberkahan atas setiap
            langkah kita.
            <br>
            Wassalamualaikum Warrahmatullahi Wabarakatuh
          </section>

          <section>
            <br>
            Hormat kami,
            <br>
            Asri Widiapsari, M.Pd
            <br>
            Kepala Sekolah SMAN 5 Malang
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