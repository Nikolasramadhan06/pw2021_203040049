<?php
/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Pertemuan 5 - 10 Maret 2021
Mempelajari mengenai Array
*/
?>
<?php
// array
// variabel yang dpat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin","selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan element baru
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);

?>