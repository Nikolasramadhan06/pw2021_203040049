<?php
/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Pertemuan 6 - 18 Maret 2021
Pertemuan kali ini membahas $_GET
*/
?>
<?php
$mahasiswa = [
	[	
		"nrp" => "203040049",
		"nama" => "Nikolas ",
		"email" => "nick@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "nick.jpg"
	],
	[
		"nama" => "Ramadhan", 
		"nrp" => "2030401123",
		"email" => "abcdefghijk@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "nick.jpg"
	]
];
?>



<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
	<?php foreach( $mahasiswa as $mhs ) : ?>
		<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
</body>
</html>