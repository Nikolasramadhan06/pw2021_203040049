<?php 
/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Jumat 10.00 - 11.00
*/
?>
<?php 
// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query dengan memanggil function
$items = query("SELECT * FROM sorum_mobil");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Mobil Jaya</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>
<body>
    <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <div class="container mt-5 mb-5">
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Lihat Detail</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($items as $item) : ?>
                    <tr>
                        <td><?= $item["id"]; ?></td>
                        <td><?= $item["Jenis"]; ?></td>
                        <td><?= $item["deskripsi"]; ?></td>
                        <td><?= ubahRupiah($item["harga"]) ?></td>
                        <td><?= $item["Stok"]; ?></td>
                        <td>
                                <figure class="image is-128x128">
                                    <img src="asset/<?= $item["Foto"]; ?>" alt="">
                                </figure>
                            </td>
                            <td><a href="php/detail.php?id=<?= $item["id"]; ?>">Pilih</td>
                        <td>
                            <a href="ubah.php?id=<?= $item['id'] ?>">Ubah</a>
                            <a href="hapus.php?id=<?= $item['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable();
        } );
    </script>
</body>
</html>