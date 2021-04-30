<?php
// Nikolas Ramadhan
// 203040049
// https://github.com/Nikolasramadhan06/pw2021_203040049
// Jumat 10.00-11.00
?>

<?php 
    function tumpukanBola($tumpukan){
        for($i = 1; $i <= $tumpukan; $i++){
            for ($j=1; $j <= $i; $j++){
                echo "<div class=\"bola\">$i</div>";
            }
        echo "<br>";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
   
    <style>
    .bola{
        width: 70px;
        height: 70px;
        background-color: salmon;
        border: 2px solid black;
        display: inline-block;
        border-radius: 100%;
        text-align: center;
        line-height: 50px;
        margin: 5px 5px 0 0;
    }
    </style>
</head>
<body>
    <?php tumpukanBola (7); ?>
</body>