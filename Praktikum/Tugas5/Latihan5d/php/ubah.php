<?php
    require 'functions.php';

    $id = $_GET['id'];
    $item = query("SELECT * FROM sorum_mobil WHERE id = $id")[0];

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo "<script>
                     alert(Data Berhaasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
        } else {
            echo "<script>
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
</head>
<body>
    <h3>Form Ubah Data Sorum</h3>
    <form action="" method="post">
        <input type="hidden" name="id"  value="<?= $item['id']; ?>">
        <ul>
            <li>
                <label for="Jenis">Jenis</label><br>
                <input type="text" name="Jenis" id="Jenis" required value="<?= $item["Jenis"]; ?>"> <br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi </label><br>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $item['deskripsi']; ?>"> <br><br>
            <li>
                <label for="harga">Harga </label><br>
                <input type="text" name="harga" id="harga" required value="<?= $item['harga']; ?>"> <br><br>
            </li>
            <li>
                <label for="Stok">Stok </label><br>
                <input type="text" name="Stok" id="Stok" required value="<?= $item['Stok']; ?>"> <br><br>
            </li>
            <li>
                <label for="Foto">Foto </label><br>
                <input type="text" name="Foto" id="Foto" required value="<?= $item['Foto']; ?>"> <br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>

</body>
</html>