<?php
function link_terpilih(string $nama_link = "", bool $is_index = false)
{
  if (!isset($_GET["module"]) && $is_index) {
    return "link--selected";
  }

  if (!isset($_GET["module"]) && !$is_index) {
    return "";
  }

  return $_GET["module"] === $nama_link ?
    "link--selected" : "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/style.css" />
  <title>Pemrograman Lanjut</title>
</head>

<body>
  <!-- nav -->
  <header class="heading">
    <div class="heading__wrapper container">
      <h1 class="heading__title">Pemrograman Lanjut</h1>
      <nav class="heading__nav">
        <a href="index.php" class="link heading__link <?= link_terpilih("", true) ?>">Profil</a>
        <a href="?module=galeri" class="link heading__link <?= link_terpilih("galeri") ?>">Galeri</a>
        <a href="?module=jadwal" class="link heading__link <?= link_terpilih("jadwal") ?>">Jadwal Kuliah</a>
      </nav>
    </div>
  </header>

  <main class="page">
    <div class="page__wrapper container">
      <?php
      if (isset($_GET["module"])) {
        $namaFile = $_GET["module"];

        include "konten/$namaFile.php";
      } else {
        include "konten/home.php";
      }
      ?>
    </div>
  </main>

  <footer class="footer">
    <div class="footer__wrapper">
      <nav class="footer__nav container">
        <a href="index.php" class="link footer__link <?= link_terpilih("", true) ?>">Profil</a>
        <a href="?module=galeri" class="link footer__link <?= link_terpilih("galeri") ?>">Galeri</a>
        <a href="?module=jadwal" class="link footer__link <?= link_terpilih("jadwal") ?>">Jadwal Kuliah</a>
      </nav>

      <span class="footer__copyright container">&copy; <?php echo date("Y"); ?> | UIN Jakarta</span>
    </div>
  </footer>
</body>

</html>