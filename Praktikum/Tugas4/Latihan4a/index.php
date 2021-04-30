<?php 
/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Jumat 10.00 - 11.00
*/
?>
<?php 
// Membuat kneksi ke database
$connect = mysqli_connect("localhost", "root", "");
// Memilih database
mysqli_select_db($connect, "pw_tubes_203040049");
//Melakukan query dari database
$result = mysqli_query($connect, "SELECT * FROM sorum_mobil");


function ubahRupiah($angka){
    return "Rp" . number_format($angka,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Mobil Jaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>
<body>
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
                </tr>
            </thead>
            <tbody>

                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row["id"]; ?></td>
                        <td><?= $row["Jenis"]; ?></td>
                        <td><?= $row["deskripsi"]; ?></td>
                        <td><?= ubahRupiah($row["harga"]) ?></td>
                        <td><?= $row["Stok"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="asset/<?= $row["Foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endwhile; ?>
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