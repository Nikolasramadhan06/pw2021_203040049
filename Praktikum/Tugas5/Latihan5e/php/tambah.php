<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Form Tambah Data Merk Mobil</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="jenis">Jenis</label><br>
                <input type="text" name="jenis" id="jenis" required><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi </label><br>
                <input type="text" name="deskripsi" id="deskripsi" required><br><br>
            </li>
            <li>
                <label for="harga">Harga </label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <li>
                <label for="Stok">Stok </label><br>
                <input type="text" name="Stok" id="Stok" required><br><br>
            </li>
            <li>
                <label for="Foto">Foto </label><br>
                <input type="text" name="Foto" id="Foto" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>

    <?php
    require 'functions.php';

    if (isset($_POST['tambah'])) {
        if (tambah($_POST) > 0) {
            echo "<script>
                     alert(Data Berhaasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
        } else {
            echo "<script>
                     alert('Data Gagal ditambahkan!');
                     document.location.href = 'admin.php';
                </script>";
        }
    }
?>
</body>
</html>