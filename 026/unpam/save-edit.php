<?php
include "../unpam/koneksi.php";

if (!isset($_POST['id'])) {
  header("Location=index.php");
}

$id = $_POST['id'];
$namadep = $_POST['namadep'];
$namabel = $_POST['namabel'];
$username = $_POST['username'];
$password = $_POST['password'];
$usia = $_POST['usia'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$email = $_POST['email'];
$notel = $_POST['notel'];

mysqli_query(
  $conn,
  "UPDATE register set
    namadep='$namadep', 
    namabel='$namabel', 
    username='$username', 
    password='$password',
    usia='$usia',
    jk='$jk',
    ttl='$ttl', 
    email='$email', 
    notel='$notel'
  WHERE id='$id'"
);

if (mysqli_affected_rows($conn) === -1) {
  die(mysqli_error($conn));
} else {
  echo "
      <script>
        alert('Data telah terubah');
        window.location.href = '/pemrograman-lanjut/026/index.php';
      </script>
    ";
}

mysqli_close($conn);
