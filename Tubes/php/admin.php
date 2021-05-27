<?php 
// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query dengan memanggil function
$book = query("SELECT * FROM category_buku");




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark text-light bg-dark">
    <h3>Book Smart |  </h3>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Tubes.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MENU
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../../kuliah">KULIAH</a>
          <a class="dropdown-item" href="../../Praktikum">PRAKTIKUM</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </div>
    </nav>

    <div class="container mt-6 mb-5">
    <br>
         <div class="field is-grouped is-justify-content-space-between">
            <form action="" method="GET">
                <div class="field is-grouped">
                    <div class="field mr-5">
                         <div class="logout">
                            <a href="logout.php" class="button is-danger" >Logout</a>
                            <a href="tambah.php" class="button btn-success">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
        
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Detail</th>
                <th>Opsi</th>
                </tr>
                
            </thead>
          
            <tbody>
            <?php if (empty($book)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color: red; font-style: italic;">data buku tidak ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?>

            <?php $i = 1;
            foreach ($book as $buku) : ?>
                 <tr>
                    <td><?= $buku["id"]; ?></td>
                    <td>
                        <figure class="image is-130x130">
                            <img src="../assets/img/<?= $buku["foto"]; ?>" alt="">
                        </figure>
                    </td>
                    <td><?= $buku['nama_buku']; ?></td>
                    <td><?= $buku['deskripsi']; ?></td>
                    <td><?= ubahRupiah($buku["harga"]) ?></td>
                    <td><?= $buku['stok']; ?></td>
                    <td>
                        <a href="detail.php?id=<?= $buku['id']; ?>">lihat detail</a>
                    </td>
                    <td>
                        <div class="buttonControl">
                            <a href="ubah.php?id=<?= $buku['id']; ?>"><button class="button is-info mr-1"><ion-icon name="create-outline"></ion-icon></button></a>
                            <br>

                            <br>
                            <a href="hapus.php?id=<?= $buku['id']; ?>" onclick="return confirm('Hapus Data?')"><button class="button is-danger"><ion-icon name="trash-outline"></ion-icon></button></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        
        <div class="nama">
       <center> <h2>Toko Buku Book Smart</h2> </center>
        </div>
        <br>
       
    </div>
   
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <div class="text-center p-3 bg-secondary">
    © 2021 Copyright Nikolas Ramadhan
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable({
                "searching" : false
            });
        } );
        </script>
</body>
</html>