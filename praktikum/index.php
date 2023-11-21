<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            font-family: poppins;
            scroll-behavior: smooth;
        }

    </style>
  </head>

  <body>

    <div class="container">
        <div class="header mt-5">
            <h1>LOGIN</h1>
        </div>

        <?php
        if(isset($_GET['pesan']))
        {
        if($_GET['pesan'] == "gagal")
        {
        echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout")

        {
        echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login")
        {
        echo "Anda harus login untuk mengakses halaman admin";
        }
        }
        ?>
      <form method="POST" action="cek_login.php">
        <div class="username mt-4">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="text" class="form-control" name="username" placeholder="name@apalah.com">
          </div>
        </div>
        <div class="paswword mt-4">
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="********">
          </div>
        </div>
        <div class="button mt-4">
        <button type="submit" class="btn btn-primary" value="LOGIN"> login </button>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>