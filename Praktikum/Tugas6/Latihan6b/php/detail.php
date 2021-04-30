<?php 
    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("Location : ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET["id"];

    // Melakukan query dengan parameter id yang diambil dari url
    $mahasiswa = query ("SELECT * FROM sorum_mobil WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Detail <?= $mahasiswa["Jenis"];  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-content has-text-centered">
                <p class="mt-5 title">
                    <?= $mahasiswa["Jenis"];?>
                </p>
                <img src="../assets/<?= $mahasiswa["foto"];  ?>" alt="">
                <p class="subtitle pb-5 is-size-5"><?= $mahasiswa["deskripsi"];  ?></p>
            </div>
            <footer class="card-footer is-size-4">
                <p class="card-footer-item">
                <span>
                    <?= ubahRupiah($mahasiswa["harga"]);?>
                </span>
                </p>
                <p class="card-footer-item">
                <span>
                    Stok = <?= $mahasiswa["Stok"];?>
                </span>
                </p>
            </footer>
            <footer class="card-footer is-size-5">
                <p class="card-footer-item">
                <span>
                    <a href="../index.php">Kembali</a>
                </span>
                </p>
            </footer>
        </div>
    </div>
</body>
</html>