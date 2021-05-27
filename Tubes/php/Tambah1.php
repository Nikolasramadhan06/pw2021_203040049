<?php

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'admin.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Judul :
          <input type="text" name="nama_buku" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Deskripsi :
          <input type="text" name="deskripsi" required>
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required>
        </label>
      </li>
      <li>
        <label>
          Stok :
          <input type="text" name="stok" required>
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="file" name="foto" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>

  <script src="../js/script.js"></script>
</body>

</html>