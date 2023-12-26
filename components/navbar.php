<?php
include(__DIR__."/../__path.php");

function show_navbar_styles()
{
  $navbar_tag_style = '
  <!-- component: navbar.php: navbar style -->
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
</style>
  ';

  echo $navbar_tag_style;
}

function show_navbar()
{
  require_once(__DIR__.'/../scripts/utils.php');

  $baseURL = getBaseURL();

  $navbar_tag = '
  <!-- component: navbar.php: navbar -->
    <header>
        <div class="w-full px-4 lg:px-0 md:max-w-5xl mx-auto my-8">
            <div class="flex justify-start items-end gap-4">
                <img class="w-16 h-auto" src="https://sman5malang.sch.id/wp-content/uploads/2021/09/logo-1.jpg" alt="school logo">
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
                                '.$baseURL.'#">Profil</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'index.php">Sambutan Kepala Sekolah</a></li>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'sejarah.php">Sejarah Sekolah</a></li>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'fasilitas.php">Fasilitas Sekolah</a></li>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'alamat.php">Alamat Sekolah</a></li>
                                </ul>
                            </div>
                        </li>';

  if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    if ($username == "admin") {
      $navbar_tag .= '
                        <li><a class="text-white nav-links has-caret-down text-sm font-sans font-semibold" href="#">Input Data</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'input-data-siswa.php">Siswa</a></li>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'input-data-staff.php">Guru/Staff</a></li>
                                </ul>
                            </div>
                        </li>';
    }

    $navbar_tag .= '
                        <li><a class="text-white nav-links has-caret-down text-sm font-sans font-semibold" href="#">Tabel Data</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'tabel-siswa.php">Siswa</a></li>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'tabel-staff.php">Guru/Staff</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="text-white nav-links has-caret-down text-sm font-sans font-semibold" href="#">Pesan dan
                                Kesan</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'input-pesan-kesan.php">Buat Pesan dan Kesan</a></li>
                                    <li><a class="font-sans font-semibold" href="'.$baseURL.'pesan-kesan.php">Lihat Pesan dan Kesan</a></li>
                                </ul>
                            </div>
                        </li>';
  } else {
    $navbar_tag .= '
                        <li><a class="text-white nav-links text-sm font-sans font-semibold" href="'.$baseURL.'pesan-kesan.php">Lihat Pesan dan Kesan</a>
                        </li>';
  }

  $navbar_tag .= '
                    </div>
                    <div class="right h-[60px] flex justify-end">';

  if (isset($_SESSION["fullname"])) {
    $fullname = $_SESSION["fullname"];

    $navbar_tag .= '
                        <li class="max-w-[220px]" ><a class="text-white nav-links nav-links-end has-caret-down text-sm font-sans font-semibold text-ellipsis" href="#">
                        ' . $fullname . '
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="font-sans font-semibold" href="#">Profil</a></li>
                            <li><a class="font-sans font-semibold" href="'.$baseURL.'scripts/logout.php">Keluar</a></li>
                        </ul>
                    </div>
                </li>';
  } else {
    $navbar_tag .= '
                        <li class="max-w-[220px]" ><a class="text-white nav-links nav-links-end text-sm font-sans font-semibold text-ellipsis" href="'.$baseURL.'login.php">
                        Masuk
                    </a>';
  }

  $navbar_tag .= '
                    </div>
                </ul>
            </div>
        </nav>
    </header>';

  echo $navbar_tag;
}

?>