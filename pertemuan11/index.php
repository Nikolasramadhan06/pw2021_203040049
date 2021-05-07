<?php
require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <a href="php/tambah.php">Tambah Data Mahasiswa</a>
  <table border="1" cellpadding="13" cellspacing="0" align="center">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
      <th>Opsi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $mhs['img']; ?>" alt="" width="100"></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td>
        <a href="php/ubah.php?id=<?= $mhs['id']; ?>">Ubah<button class="button is-info mr-1"><ion-icon name="create-outline"></ion-icon></button></a>
        <a href="hapus.php">Hapus<button class="button is-danger"><ion-icon name="trash-outline"></ion-icon></button></a>
        </td>
        <td><a href="php/detail.php?id=<?= $mhs["id"]; ?>">Pilih</td>
        
      </tr>
      <?php $i++; ?>

    <?php endforeach; ?>
  </table>