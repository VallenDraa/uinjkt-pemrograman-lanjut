<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query(
  $conn,
  "DELETE FROM register WHERE id = '$id'"
);

if (mysqli_affected_rows($conn) === -1) {
  die(mysqli_error($conn));
} else {
  echo "
      <script>
        alert('Selamat, anda telah terdaftar');
        window.location.href = '/pemrograman-lanjut/026/index.php';
      </script>
    ";
}

mysqli_close($conn);
