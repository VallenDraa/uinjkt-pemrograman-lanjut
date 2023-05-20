<h2>Daftar Member</h2>

<?php
include "unpam/koneksi.php";

$hasil = mysqli_query(
  $conn,
  "SELECT * FROM register"
);
?>

<table border="1">
  <tr>
    <td>Id</td>
    <td>Nama Depan</td>
    <td>Nama Belakang</td>
    <td>Username</td>
    <td>Password</td>
    <td>Usia</td>
    <td>Jenis Kelamin</td>
    <td>TTL</td>
    <td>Email</td>
    <td>Notel</td>
    <td colspan="2" align="center">Aksi</td>
  </tr>

  <?php
  while ($buff = mysqli_fetch_array($hasil)) {
  ?>
    <tr>
      <td><?= $buff['id'] ?></td>
      <td><?= $buff['namadep'] ?></td>
      <td><?= $buff['namabel'] ?></td>
      <td><?= $buff['username'] ?></td>
      <td><?= $buff['password'] ?></td>
      <td><?= $buff['usia'] ?></td>
      <td><?= $buff['jk'] ?></td>
      <td><?= $buff['ttl'] ?></td>
      <td><?= $buff['email'] ?></td>
      <td><?= $buff['notel'] ?></td>
      <td><a href="./konten/edit.php?id=<?= $buff['id'] ?>">Edit</a></td>
      <td><a href="./unpam/hapus.php?id=<?= $buff['id'] ?>">Hapus</a></td>
    </tr>
  <?php
  }
  ?>

  <?php
  mysqli_close($conn);
  ?>
</table>
<a class="link" href="index.php"><--- Kembali ke Register</a>