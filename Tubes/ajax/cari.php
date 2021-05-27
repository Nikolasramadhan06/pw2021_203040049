
<?php
require '../php/functions.php';
$book = cari($_GET['keyword']);
?>
 <p>&larr; <a href="index.php">Home</a>
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
                </tr>
                
            </thead>
          
            <tbody>
            <?php if (empty($book)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?>

            <?php $i = 1;
            foreach ($book as $buku) : ?>
                 <tr>
                    <td><?= $buku["id"]; ?></td>
                    <td>
                        <figure class="image is-130x130">
                            <img src="assets/img/<?= $buku["foto"]; ?>" alt="">
                        </figure>
                    </td>
                    <td><?= $buku['nama_buku']; ?></td>
                    <td><?= $buku['deskripsi']; ?></td>
                    <td><?= ubahRupiah($buku["harga"]) ?></td>
                    <td><?= $buku['stok']; ?></td>
                    <td>
                        <a href="php/detail.php?id=<?= $buku['id']; ?>">lihat detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>