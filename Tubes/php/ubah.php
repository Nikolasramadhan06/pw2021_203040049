<?php 
session_start();

require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM category_buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
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
         <form action="" method="post">
                <input type="hidden" name="id"  value="<?= $buku['id']; ?>">

                <label for="foto">Foto </label><br>
                <input type="text" name="foto" class="form_ubah" id="foto" required value="<?= $buku['foto']; ?>"> <br><br>

                <label for="nama_buku">Judul</label><br>
                <input type="text" name="nama_buku" class="form_ubah" id="nama_buku" required value="<?= $buku["nama_buku"]; ?>"> <br><br>
            
                <label for="deskripsi">Deskripsi </label><br>
                <input type="text" name="deskripsi" class="form_ubah" id="deskripsi" required value="<?= $buku['deskripsi']; ?>"> <br><br>
            
                <label for="harga">Harga </label><br>
                <input type="text" name="harga" class="form_ubah" id="harga" required value="<?= $buku['harga']; ?>"> <br><br>
            
                <label for="stok">Stok </label><br>
                <input type="text" name="stok" class="form_ubah" id="stok" required value="<?= $buku['stok']; ?>"> <br><br>
            
            
            <button class="btn btn-primary" type="submit" name="ubah">Ubah Data!</button>
            <button class="btn btn-success" type="submit">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        
        </form>
    </div>
    <br>
    </div>

</body>
</html>