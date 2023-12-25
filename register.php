<?php
include("./scripts/session_check.php");
session_check_for_auth();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun | SMAN 5 Malang</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="icon" href="https://sman5malang.sch.id/wp-content/uploads/2021/09/cropped-cropped-logo-32x32.jpg"
    sizes="32x32">
  <script src="https://cdn.tailwindcss.com"></script>
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
  <main class="h-full">
    <div class="flex flex-row h-full">
      <div class="left w-[60%] hidden md:block">
        <img class="w-full h-full object-cover brightness-[0.4]" src="./assets/foto-depan.webp" alt="foto depan">
      </div>
      <div
        class="right bg-[#F8F9FA] w-full md:w-[40%] h-full flex flex-col justify-center items-center overflow-y-auto">
        <div class="h-full py-8 w-full md:max-w-[450px]">
          <div class="w-full h-full flex flex-col justify-between items-center">
            <div class="top flex flex-col items-center gap-4">
              <img class="w-[65.5px] h-[98px]" src="https://sman5malang.sch.id/wp-content/uploads/2021/09/logo.jpg"
                alt="logo">
              <p class="text-3xl font-semibold">Selamat Datang</p>
              <p class="text-sm">Isilah menggunakan data diri Anda</p>
              <?php
              if (isset($_GET["error"])) {
                $error_tag = "<p class=\"text-red-600 font-medium text-sm\">";
                $error_name = $_GET["error"];
                if ($error_name == "wrongData") {
                  $error_tag = $error_tag . "Data Verifikasi yang Anda masukan tidak sesuai";
                } else if ($error_name == "unknownID") {
                  $error_tag = $error_tag . "Nomor Identitas tidak diketahui! Hubungi Adminstrator";
                } else if ($error_name == "usernameUsed") {
                  $error_tag = $error_tag . "Username telah digunakan! Gunakan username lain";
                } else {
                  $error_tag = $error_tag . "Unexpected Error, check console";
                }
                $error_tag = $error_tag . "</p>";
                echo $error_tag;
              }
              ?>
            </div>
            <div class="middle w-full mt-8 px-8">
              <form action="./scripts/register.php" method="POST" id="register-form">
                <div class="flex flex-col justify-center gap-2 mt-4">
                  <label class="text-sm" for="username-field">Username</label>
                  <input placeholder="soepandi"
                    class="placeholder:text-slate-500 w-full max-w-sm border transition-all focus:outline-none focus:border-[#21AD95] border-black rounded-md h-10 ps-2"
                    type="text" name="username" id="username-field" required>
                  <label class="text-sm mt-4" for="fullname-field">Nama Lengkap</label>
                  <input placeholder="Sopeandi Purnomo"
                    class="placeholder:text-slate-500 w-full max-w-sm border transition-all focus:outline-none focus:border-[#21AD95] border-black rounded-md h-10 ps-2"
                    type="text" name="fullname" id="fullname-field" required>
                  <label class="text-sm mt-4" for="password-field">Password</label>
                  <input placeholder="******"
                    class="placeholder:text-slate-500 w-full max-w-sm border transition-all focus:outline-none focus:border-[#21AD95] border-black rounded-md h-10 ps-2"
                    type="password" name="password" id="password-field" required>
                  <span class="password-error-message hidden text-red-700 text-sm">Password tidak cocok!</span>
                  <label class="text-sm mt-4" for="vpassword-field">Ulangi Password</label>
                  <input placeholder="******"
                    class="placeholder:text-slate-500 w-full max-w-sm border transition-all focus:outline-none focus:border-[#21AD95] border-black rounded-md h-10 ps-2"
                    type="password" name="vpassword" id="vpassword-field" required>
                  <span class="password-error-message hidden text-red-700 text-sm">Password tidak cocok!</span>
                </div>
                <p class="text-sm text-slate-500 mt-8">Data Verifikasi Pendaftar:</p>
                <div class="flex flex-col justify-center gap-2 mt-4">
                  <p class="text-sm">Status:</p>
                  <div class="flex gap-4" id="role-radio-buttons">
                    <label for="role-teacher"><input type="radio" name="role" value="teacher" id="role-teacher" checked>
                      &nbsp;Guru</label>
                    <label for="role-staff"><input type="radio" name="role" value="staff" id="role-staff">
                      &nbsp;Staff</label>
                    <label for="role-student"><input type="radio" name="role" value="student" id="role-student">
                      &nbsp;Siswa</label>
                  </div>
                  <label class="text-sm mt-4" id="identity-number-label" for="identity-number-field">Nomor Identitas
                    Pegawai</label>
                  <input placeholder="14849"
                    class="placeholder:text-slate-500 w-full max-w-sm border transition-all focus:outline-none focus:border-[#21AD95] border-black rounded-md h-10 ps-2"
                    type="number" name="employee_number" id="identity-number-field" required>
                  <input
                    class="transition-all mt-10 bg-[#21AD95] hover:bg-[#EF5921] hover:cursor-pointer rounded-lg px-6 py-3 text-white w-fit mx-auto"
                    type="submit" value="Daftar" name="register">
                  <div class="flex w-100 gap-2 items-center mt-4">
                    <div class="border-b-[1px] border-slate-400 flex-1"></div>
                    <span class="text-slate-500 w-fit text-xs">ATAU</span>
                    <div class="border-b-[1px] border-slate-400 flex-1"></div>
                  </div>
                  <a href="login.php"
                    class="transition-all mt-4 bg-transparent hover:text-[#EF5921] hover:cursor-pointer rounded-lg text-[#21AD95] mx-auto text-sm">Login
                    Akun Saja</a>
                </div>
              </form>
              <script>
                    const identityLabel = document.getElementById("identity-number-label");
                    const identityField = document.getElementById("identity-number-field");
                    const roleRadioButtons = document.getElementById("role-radio-buttons");

                    roleRadioButtons.addEventListener("change", function () {
                      const selectedRoleButton = document.querySelector('input[name="role"]:checked');
                      if (selectedRoleButton) {
                        switch (selectedRoleButton.value) {
                          case "student":
                            identityLabel.innerText = "Nomor Induk Siswa";
                            identityField.setAttribute("name", "student_number");
                            break;
                          // future implementation
                          default:
                            identityLabel.innerText = "Nomor Identitas Pegawai";
                            identityField.setAttribute("name", "employee_number");
                        }
                      }
                    })

                    const registerForm = document.getElementById("register-form");
                    const passwordField = document.getElementById("password-field");
                    const vPasswordField = document.getElementById("vpassword-field");
                    const passwordErrorMsgs = document.querySelectorAll(".password-error-message");


                    registerForm.addEventListener('submit', function (event) {
                      event.preventDefault();

                      if (passwordField.value === vPasswordField.value) {
                        passwordErrorMsgs.forEach(e => {
                          e.classList.add("hidden");
                        })

                        event.target.submit();
                      } else {
                        passwordErrorMsgs.forEach(e => {
                          e.classList.remove("hidden");
                        })
                      }
                    })
                  </script>
            </div>
            <div class="bottom py-8">
              <p class="text-sm">Masalah dengan akun? hubungi <a
                  class="transition-all text-[#21AD95] hover:text-[#EF5921] hover:underline"
                  href="https://wa.me/6282257291200" target="_blank">adminstrator</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>