<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
                </script>";
    } else {
        echo "<script>
                alert('Registrasi Berhasil');
             </script>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<p>&larr; <a href="login.php">Home</a>
<div class="container mt-5">

    <h4>Bergabunglah Bersama Sorum Mobil Honda Cabang Jawa Barat..</h4>
    <div class="row">
        <div class="col-md-6">
        <form action="" method="post">
            <tabel>
                <div class="form-group">
                    <label for="username">username</label>
                    <td></td>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <td><label for="password">password</label></td>
                    <td></td>
                    <td><input type="password" name="password"></td>
                    </div>
            </tabel>
            <button type="submit" name="register">REGISTRASI</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>