<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
include "koneksi.php";

if (!isset($_POST["username"]) && !isset($_POST["password"])) {
  header("Location=index.php");
}

$username = $_POST["username"];
$password = $_POST["password"];

$username_res;
$password_res;


if ($stmt =
  mysqli_prepare(
    $conn,
    "SELECT username, password FROM register WHERE `username`= ? AND `password`= ?"
  )
) {
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);

  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $username_res, $password_res);

  if (mysqli_stmt_fetch($stmt)) {
    $_SESSION['username'] = $username_res;
    $_SESSION['password'] = $password_res;

    echo "
      <script>
        alert('Anda Berhasil Masuk');
        window.location.href = '../?module=index-user#pos';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Anda Gagal Masuk');
        window.location.href = '../index.php';
      </script>
    ";
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
