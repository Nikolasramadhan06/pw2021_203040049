<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel ="stylesheet" href="../css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<div class="kotak_login">
  <center><h3>Form Login</h3></center>
  <br>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
        <label>
          Username :
          <input type="text" name="username"  class="form_login border border-primary" autofocus autocomplete="off" required>
        </label>
      <br>
      
        <label>
          Password
          <input type="password" name="password"  class="form_login border border-primary" required>
        </label>
      <br>
      
        <button class="btn btn-primary"  type="submit" name="login">Login</button>
      <p></p>
        <p>Belum punya akun? REGISTRASI <a href="registrasi.php">Disini</a></p>
      
    </ul>
  </form>
</div>
</body>

</html>