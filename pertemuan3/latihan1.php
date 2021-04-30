<?php

/*
Nikolas Ramadhan
203040049
https://github.com/Nikolasramadhan06/pw2021_203040049
Pertemuan 3 - 20 Februari 2021
Mempelajari mengenai Pengulangan PHP
*/

// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
// echo "hello world! <br>";
// }
// $i = 0;
// while( $i < 5 ) {
// echo "hello world! <br>";
// $i++;
// }
// $i = 10;
// do {
// echo "hello world! <br>";
// $1++;
// } while( $i < 5 );

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j =1; $j <= 5; $j++ ) : ?>
                <td><?=  "$i, $j"; ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>

</table>

</body>

</html>
