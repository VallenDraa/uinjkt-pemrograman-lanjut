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
  <div id="container">
    <div id="header">
      <h1>Pemrograman Lanjut</h1>
    </div>

    <div id="flex-wrapper">
      <div id="sidebar">
        <h3>navigasi</h3>
        <ul id="navmenu">
          <li><a href="index.php" class="selected">Profil</a></li>
          <li><a href="?module=galeri">Galeri</a></li>
          <li><a href="?module=jadwal">Jadwal Kuliah</a></li>
        </ul>
      </div>

      <div id="page">
        <?php
        if (isset($_GET["module"])) {
          $namaFile = $_GET["module"];

          include "konten/$namaFile.php";
        } else {
          include "unpam/index.php";
        }
        ?>
      </div>
    </div>

    <div id="footer">
      <p>&copy; 2010</p>
    </div>
  </div>
</body>

</html>