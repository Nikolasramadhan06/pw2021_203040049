<?php 

/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Pertemuan 2 - 14 Februari 2021
Mempelajari mengenai sintaks PHP
*/


// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dumb

// Pemulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung ngka
// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;
$nama = "Nikolas Ramadhan";

// penggabung string / concatenation /  concat
// .
// $nama_depan = "Nikolas" ; 
// $nama_belakang = "Ramadhan" ;
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Nikolas"
// $nama .= " ";
// $nama .= "Galih";
// $echo $nama;

// Perbandingan 
// <, >, <=, >=, ==
// var_dump(1 == "1");

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0)

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>203040049</title>
</head>
<body>
    <h1>Hallo, Selamat Datang <?php echo $nama; ?><h1>
</body>
</html>


