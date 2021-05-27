<?php 
session_start();

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$buku = query("SELECT * FROM category_buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'admin.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}
  
  ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="ubah">
    <br>
    <div class="kotak_ubah">
        <p class="tulisan_login">Silahkan Ubah Data</p>
        <br>
         <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id"  value="<?= $buku['id']; ?>">

               
                <input type="hidden" name="foto_lama" value="<?= $buku['foto']; ?>">
                <li>
        <label>
          Gambar :
          <input type="file" name="foto" class="foto" onchange="previewImage()">
        </label>
        <img src="../assets/img/<?= $buku['foto']; ?>" width="120" style="display: block;" class="img-preview">
      </li>
                <label for="nama_buku">Judul</label><br>
                <input type="text" name="nama_buku" class="form_ubah" id="nama_buku" required value="<?= $buku["nama_buku"]; ?>"> <br><br>
            
                <label for="deskripsi">Deskripsi </label><br>
                <input type="text" name="deskripsi" class="form_ubah" id="deskripsi" required value="<?= $buku['deskripsi']; ?>"> <br><br>
            
                <label for="harga">Harga </label><br>
                <input type="text" name="harga" class="form_ubah" id="harga" required value="<?= $buku['harga']; ?>"> <br><br>
            
                <label for="stok">Stok </label><br>
                <input type="text" name="stok" class="form_ubah" id="stok" required value="<?= $buku['stok']; ?>"> <br><br>
            
            
            <button class="btn btn-primary" type="submit" name="ubah">Ubah Data!</button>
            <button class="btn btn-success">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        
        </form>
    </div>
    <br>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>