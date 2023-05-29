<?php
session_start();
include "koneksi.php";

if ($stmt =
  mysqli_prepare(
    $conn,
    "SELECT * FROM reg"
  )
);
