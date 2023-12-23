<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | SMAN 5 Malang</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="icon" href="https://sman5malang.sch.id/wp-content/uploads/2021/09/cropped-cropped-logo-32x32.jpg"
    sizes="32x32">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Inter, 'sans-serif';
      height: 100vh;
      width: 100%;
      overflow: hidden;
    }
  </style>
</head>

<body>
  <main class="h-full">
    <div class="flex flex-row h-full">
      <div class="left w-[60%] hidden md:block">
        <img class="w-full h-full object-cover brightness-[0.4]" src="./assets/foto-depan.webp" alt="foto depan">
      </div>
      <div class="right bg-[#F8F9FA] w-full md:w-[40%] h-full flex flex-col justify-center">
        <div class="h-full max-h-[700px]">
            <div class="w-full h-full flex flex-col justify-between items-center">
            <div class="top flex flex-col items-center gap-4">
              <img class="w-[65.5px] h-[98px]" src="https://sman5malang.sch.id/wp-content/uploads/2021/09/logo.jpg" alt="logo">
              <p class="text-3xl font-semibold">Selamat Datang</p>
              <p class="text-sm">Silahkan masukan kredensial anda</p>
              <?php 
                if(isset($_GET["error"])){
                  $error_tag = "<p class=\"text-red-600 font-medium text-sm\">";
                  $error_name = $_GET["error"];
                  if($error_name == "wrongCredential"){
                    $error_tag = $error_tag."Kombinasi Username dan Kata Sandi salah!";
                  } else if($error_name == "notLogged"){
                    $error_tag = $error_tag."Masuk terlebih dahulu";
                  } else if($error_name == "fieldError"){
                    $error_tag = $error_tag."Data salah";
                  }
                  $error_tag = $error_tag."</p>";
                  echo $error_tag;
                }
              ?>
            </div>
            <div class="middle">
              <form action="./scripts/login.php" method="POST">
                <div class="flex flex-col justify-center gap-2">
                  <label class="text-sm" for="username-field">Username</label>
                  <input placeholder="soepandi" class="placeholder:text-slate-500 w-full max-w-sm border transition-all focus:outline-none focus:border-[#21AD95] border-black rounded-md h-10 ps-2" type="text" name="username" id="username-field" required>
                  <label class="text-sm mt-4" for="password-field">Password</label>
                  <input placeholder="******" class="placeholder:text-slate-500 w-full max-w-sm border transition-all focus:outline-none focus:border-[#21AD95] border-black rounded-md h-10 ps-2" type="password" name="password" id="password-field" required>
                  <a class="transition-all text-[#21AD95] hover:text-[#EF5921] hover:underline text-xs w-fit" href="#">Lupa Password</a>
                  <input class="transition-all mt-10 bg-[#21AD95] hover:bg-[#EF5921] hover:cursor-pointer rounded-lg px-6 py-3 text-white w-fit mx-auto" type="submit" value="Masuk" name="login">
                </div>
              </form>
            </div>
            <div class="bottom">
              <p class="text-sm">Masalah dengan akun? hubungi <a class="transition-all text-[#21AD95] hover:text-[#EF5921] hover:underline" href="https://wa.me/6282257291200" target="_blank">adminstrator</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>