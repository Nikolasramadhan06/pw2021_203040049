<?php 
    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("Location : ../index.php");
        exit;
    }

    require 'functions.php';
// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$buku = query("SELECT * FROM category_buku WHERE id = $id");

?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Detail <?= $buku["nama_buku"];  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../css/detail.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-content has-text-centered">
                <p class="mt-5 title">
                    <?= $buku["nama_buku"];?>
                </p>
                <img src="../assets/img/<?= $buku["foto"];  ?>" alt="">
                <p class="subtitle pb-5 is-size-5"><?= $buku["deskripsi"];  ?></p>
            </div>
            <footer class="card-footer is-size-4">
                <p class="card-footer-item">
                <span>
                    <?= ubahRupiah($buku["harga"]);?>
                </span>
                </p>
                <p class="card-footer-item">
                <span>
                    stok = <?= $buku["stok"];?>
                </span>
                </p>
            </footer>
            <footer class="card-footer is-size-5">
                <p class="card-footer-item button is-success">
                <span>
                    <a href="../index.php">Kembali</a>
                </span>
                </p>
            </footer>
        </div>
    </div>
</body>
</html>