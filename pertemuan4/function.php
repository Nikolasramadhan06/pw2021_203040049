<?php

/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Pertemuan 4 - 2 Maret 2021
Mempelajari mengenai Date dan Time
*/


function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat  $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Siang", "Nikolas"); ?></h1>
</body>
</html>