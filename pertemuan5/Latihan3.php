<?php
/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Pertemuan 5 - 10 Maret 2021
Mempelajari mengenai Pengulangan
*/
?>
<?php
// bagaimana bila data mahasiswa nya banyak?
// maka caranya kita akan membuat array multi dimensi / membuat array didalam array
// dengan cara menambah []
$mahasiswa = [
    ["Nikolas", 203040049, "Teknik Informatika", "niikonikolas0612@gmail.com"],
    ["Ramadhan", 203040449, "Teknik Informatika", "niikonikolas061201@gmail.com"],
    ["Nico", 203040089, "Teknik Informatika", "niikonikolas06@gmail.com"]

];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) :?>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NRP :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email :<?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>