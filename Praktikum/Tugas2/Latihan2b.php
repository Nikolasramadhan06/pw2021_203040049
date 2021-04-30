<?php
// Nikolas Ramadhan
// 203040049
// https://github.com/Nikolasramadhan06/pw2021_203040049
// Jumat 10.00-11.00
?>

<?php 
    $jawabanIsset = "isset adalah fungsi digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false<br><br>";
    $jawabanEmpty = "empty adalah fungsi digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong.";

    // Sumber http://tabloidit.blogspot.com/2013/03/pengertian-dan-fungsi-isset-pada-php.html
    

    function soal($style){
        return "<div class=\"$style\">" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>

    <style>
    .style{
        border: 1px solid black;
        padding: 10px;
        font-size: 20px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
    
</body>
</html>