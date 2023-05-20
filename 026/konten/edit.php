<?php
include "../unpam/koneksi.php";

if (!isset($_GET['id'])) {
  header("Location=index.php");
}

$id = $_GET['id'];
$hasil = mysqli_query(
  $conn,
  "SELECT * FROM register WHERE id='$id'"
);

$buff = mysqli_fetch_assoc($hasil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
</head>

<body>

  <form action="../unpam/save-edit.php" method="POST">
    <div style="text-align: center; font-weight: bold;">
      <h1>Edit Data</h1>
    </div>

    <table width="496" border="0" align="center">
      <input type="hidden" name="id" value="<?= $buff['id'] ?>" />
      <tr>
        <td width="163">Nama Depan: </td>
        <td>
          <input type="text" name="namadep" value="<?= $buff['namadep'] ?>" />
        </td>
      </tr>
      <tr>
        <td>Nama Belakang: </td>
        <td>
          <input type="text" name="namabel" value="<?= $buff['namabel'] ?>" />
        </td>
      </tr>
      <tr>
        <td>Username: </td>
        <td>
          <input type="text" name="username" value="<?= $buff['username'] ?>" />
        </td>
      </tr>
      <tr>
        <td>Password: </td>
        <td>
          <input type="password" name="password" value="<?= $buff['password'] ?>" />
        </td>
      </tr>
      <tr>
        <td>Usia: </td>
        <td>
          <input type="text" name="usia" value="<?= $buff['usia'] ?>" />
        </td>
      </tr>
      <tr>
        <td>Jenis Kelamin: </td>
        <td>
          <input type="text" name="jk" value="<?= $buff['jk'] ?>" />
        </td>
      </tr>
      <tr>
        <td>TTL: </td>
        <td>
          <input type="text" name="ttl" value="<?= $buff['ttl'] ?>" />
        </td>
      </tr>
      <tr>
        <td>Email: </td>
        <td>
          <input type="email" name="email" value="<?= $buff['email'] ?>" />
        </td>
      </tr>
      <tr>
        <td>No Tel: </td>
        <td>
          <input type="text" name="notel" value="<?= $buff['notel'] ?>" />
        </td>
      </tr>
      <tr>
        <td>
          <button type="reset">Reset</button>
          <button>Submit</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>