<?php
  include "koneksi.php";

  $namadep = $_POST['namadep'];
  $namabel = $_POST['namabel'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $usia = $_POST['usia'];
  $jk = $_POST['jk'];
  $ttl = $_POST['ttl'];
  $email = $_POST['email'];
  $notel = $_POST['notel'];

  mysqli_query($conn, 
    "INSERT INTO register VALUES(
      NULL,
      '$namadep', 
      '$namabel', 
      '$username', 
      '$password',
      '$usia',
      '$jk',
      '$ttl', 
      '$email', 
      '$notel'
    )
    "
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
?>
