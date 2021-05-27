<?php

function koneksi()
{
  return mysqli_connect('Localhost', 'root', '', 'pw20049_pw2021_203040049');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

    function ubahRupiah($angka){
        return "Rp" . number_format($angka,2,',','.');
    }

    // fungsi cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM category_buku
            WHERE 
             nama_buku LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                stok LIKE '%$keyword%'
            ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

   // fungsi hapus
function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder
  $buku = query("SELECT * FROM category_buku WHERE id = $id");
  if ($buku['gambar'] != 'nophoto.jpg') {
    unlink('img/' . $buku['gambar']);
  }

  mysqli_query($conn, "DELETE FROM category_buku WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

    function ubah($data)
    {
      $conn = koneksi();
    
      $id = $data['id'];
      $nama_buku = htmlspecialchars($data['nama_buku']);
      $deskripsi = htmlspecialchars($data['deskripsi']);
      $harga = htmlspecialchars($data['harga']);
      $stok= htmlspecialchars($data['stok']);
      $foto_lama = htmlspecialchars($data['foto_lama']);
    
      $foto = upload();
      if (!$foto) {
        return false;
      }
    
      if ($foto == 'nophoto.jpg') {
        $foto = $foto_lama;
      }

      $query = "UPDATE category_buku SET
                  nama_buku = '$nama_buku',
                  deskripsi = '$deskripsi',
                  harga = '$harga',
                  stok = '$stok',
                  foto = '$foto'
                WHERE id = $id";
     mysqli_query($conn, $query) or die(mysqli_error($conn));
     echo mysqli_error($conn);
     return mysqli_affected_rows($conn);
    }
 // fungsi login
    function login($data)
    {
      $conn = koneksi();
    
      $username = htmlspecialchars($data['username']);
      $password = htmlspecialchars($data['password']);
    
      // cek dulu usernamenya
      if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $user['password'])) {
          // set session
          $_SESSION['login'] = true;
    
          header("Location: admin.php");
          exit;
        }
      }
      return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
      ];
    }
    
    // fungsi registrasi
    function registrasi($data)
    {
      $conn = koneksi();
    
      $username = htmlspecialchars(strtolower($data['username']));
      $password1 = mysqli_real_escape_string($conn, $data['password1']);
      $password2 = mysqli_real_escape_string($conn, $data['password2']);
    
      // jika username / password kosong
      if (empty($username) || empty($password2) || empty($password2)) {
        echo "<script>
        alert('username / password tidak boleh kosong!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
      }
    
    
      // jika username sudah ada
      if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
        alert('username sudah terdaftar!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
      }
    
    
      // jika konfirmasi password tidak sesuai
      if ($password1 !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
      }
    
    
      // jika password < 5 digit
      if (strlen($password1) < 5) {
        echo "<script>
        alert('password terlalu pendek!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
      }
    
      // jika username dan passwordnya sesuai
      // enkripsi password
      $password_baru = password_hash($password1, PASSWORD_DEFAULT);
      // insert ke tabel user
      $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";
      mysqli_query($conn, $query) or die(mysqli_error($conn));
      return mysqli_affected_rows($conn);
    }

    // function tambah dan upload gambar
function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //       alert('pilih gambar terlebih dahulu!');
    //       </script>";
    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
          alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
    alert('yang anda pilih bukan gambar!');
    </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5Mb == 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
    alert('ukuran terlalu besar!');
    </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();


  $nama_buku = htmlspecialchars($data['nama_buku']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $harga = htmlspecialchars($data['harga']);
  $stok = htmlspecialchars($data['stok']);
  //$foto = htmlspecialchars($data['foto']);

  // upload gambar
  $foto = upload();
  if (!$foto) {
    return false;
  }

  $query = "INSERT INTO
               category_buku
            VALUES
            (null, '$nama_buku', '$deskripsi', '$harga', '$stok', '$foto');
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


?>