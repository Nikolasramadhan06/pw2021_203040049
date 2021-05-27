<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('user baru berhasil ditambahkan. silahkan login!');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel ="stylesheet" href="../css/style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="regis">
    <div class="row">
        <div class="col-md-6">

            <p>&larr; <a href="login.php">Home</a>
            <h3 class="text-white">Form Registrasi</h3>
            <form action="" method="POST">
                    <div class="form-group">
                    <label for="username"class="text-white">Username </label>
                        <input  class="form-control" type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
                    </div>
               
                    <div class="form-group">
                    <h4><label for="password" class="text-white">Password</label></4>
                        <input  class="form-control" type="password" name="password1"  placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="konfirmasi_password" class="text-white">  Konfirmasi Password </label>
                        <input  class="form-control" type="password" name="password2" placeholder="Konfirmasi Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="registrasi">Registrasi</button>
               
            </form>
        </div>
    </div>
</div>
</body>

</html>