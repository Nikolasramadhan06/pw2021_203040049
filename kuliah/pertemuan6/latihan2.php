<?php 
// $mahasiswa = [
// ["Nikolas Ramadhan", "203040049", "nick@gmail.com", "Teknik Informatika"],
// ["2030401123", "Ramadhan", "abcdefghijk@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>