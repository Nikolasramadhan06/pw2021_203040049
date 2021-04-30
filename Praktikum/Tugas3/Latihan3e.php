<?php
/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Jumat 10.00-11.00
*/
?>
<?php 
$items = [
    [
        "nama"=>"Honda Jazz",
        "deskripsi"=>"Honda Jazz tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 8 varian",
        "warnaDominan"=>"Orange",
        "harga"=>256000000,
        "jumlahStok"=>3,
        "foto"=>"jazz.jpg"
    ],
    [
        "nama"=>"Honda Brio",
        "deskripsi"=>"Honda Brio tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 12 varian",
        "warnaDominan"=>"Kuning",
        "harga"=>151000000,
        "jumlahStok"=>7,
        "foto"=>"brio.jpg"
    ],
    [
        "nama"=>"Honda BRV",
        "deskripsi"=>"Honda BRV tersedia dalam pilihan mesin Bensin di Indonesia SUV baru dari Honda hadir dalam 8 varian",
        "warnaDominan"=>"Merah",
        "harga"=>255000000,
        "jumlahStok"=>3,
        "foto"=>"brv.jpg"
    ],
    [
        "nama"=>"Honda HRV",
        "deskripsi"=>"Honda HRV tersedia dalam pilihan mesin Bensin di Indonesia Crossover baru dari Honda hadir dalam 10 varian.",
        "warnaDominan"=>"Merah",
        "harga"=>306000000,
        "jumlahStok"=>2,
        "foto"=>"hrv.jpg"
    ],
    [
        "nama"=>"Honda CRV",
        "deskripsi"=>"Honda CRV tersedia dalam pilihan mesin Bensin di Indonesia Crossover baru dari Honda hadir dalam 6 varian",
        "warnaDominan"=>"Abu-Abu",
        "harga"=>489000000,
        "jumlahStok"=>13,
        "foto"=>"crv.jpg"
    ],
    [
        "nama"=>"Honda Civic",
        "deskripsi"=>"Honda Civic tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari Honda hadir dalam 2 varian.",
        "warnaDominan"=>"Marah",
        "harga"=>536000000,
        "jumlahStok"=>3,
        "foto"=>"civic.jpg"
    ],
    [
        "nama"=>"Honda Mobilio",
        "deskripsi"=>"Honda Mobilio tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Honda hadir dalam 10 varian. ",
        "warnaDominan"=>"Putih",
        "harga"=>290000000,
        "jumlahStok"=>6,
        "foto"=>"mobilio.jpg"
    ],
    [
        "nama"=>"Honda Hatchback",
        "deskripsi"=>"Honda City Hatchback tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 4 varian",
        "warnaDominan"=>"Putih",
        "harga"=>230000000,
        "jumlahStok"=>8,
        "foto"=>"Hatchback.jpg"
    ],
    [
        "nama"=>"Civic Type R",
        "deskripsi"=>"Honda Civic Type R tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 2 varian.",
        "warnaDominan"=>"Putih",
        "harga"=>1000000000,
        "jumlahStok"=>2,
        "foto"=>"png/civicR.jpg"
    ],
    [
        "nama"=>"Honda WRV",
        "deskripsi"=>"Honda WRV tersedia dalam 6 warna yang berbeda - Alabaster Silver Metallic, White Orchid Pearl, Modern Steel Matallic,",
        "warnaDominan"=>"Coklat",
        "harga"=>200000000,
        "jumlahStok"=>5,
        "foto"=>"wrv.jpg"
    ]
];

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
                    <th>Warna Dominan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $number => $item) : ?>
                    <tr>
                        <td><?= $number+1; ?></td>
                        <td><?= $item["nama"]; ?></td>
                        <td><?= $item["deskripsi"]; ?></td>
                        <td><?= $item["warnaDominan"]; ?></td>
                        <td><?= ubahRupiah($item["harga"]) ?></td>
                        <td><?= $item["jumlahStok"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="png/<?= $item["foto"]; ?>" alt="">
                            </figure>
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