<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/style.css" />
  <title>My Website</title>
</head>

<body>

  <header class="container card">
    <h1>Pemrograman Lanjut</h1>
  </header>

  <main class="container">
    <aside class="sidebar">
      <div class="card navigasi">
        <h2>Navigasi</h2>
        <nav>
          <a href=" index.php" class="selected">Profil</a>
          <a href="?module=lihat">View Data</a>
          <a href="?module=cari">Jadwal Kuliah</a>
        </nav>
      </div>

      <form class="card login-form" method="post">
        <div class="login-item">
          <label for="username">Username</label>
          <input type="text" name="username">
        </div>

        <div class="login-item">
          <label for="password">Password</label>
          <input type="password" name="password">
        </div>

        <button>Login</button>
      </form>
    </aside>
    <section id="page" class="card">
      <?php
      if (isset($_GET["module"])) {
        $namaFile = $_GET["module"];

        include "konten/$namaFile.php";
      } else {
        include "konten/index.php";
      }
      ?>
    </section>
  </main>

  <footer>
    <span class="footer__copyright">&copy; 2023 | UIN Jakarta</span>
  </footer>
</body>

</html>