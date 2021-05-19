<?php 
    // function untuk melakukan koneksi ke database dan memilih database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw2021_203040049");
        return $conn;
    }
     // function untuk melakukan query dan memasukannya kedalam array
     function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;

        }
        return $rows;
    }

    function ubahRupiah($angka){
        return "Rp" . number_format($angka,2,',','.');
    }

    function cari($keyword) {
        $query = "SELECT * FROM category_buku
                WHERE
                nama_buku LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                stok LIKE '%$keyword%'
        ";
        return query($query);
    }

    function hapus($id){
        $conn = koneksi();
        
        $query = "DELETE FROM `category_buku` WHERE id = '$id'";
        
        mysqli_query($conn, $query);
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
      $foto = htmlspecialchars($data['foto']);
    
    
      $query = "UPDATE category_buku SET
                  nama_buku = '$nama_buku',
                  deskripsi = '$deskripsi',
                  harga = '$harga',
                  stok = '$stok',
                  foto = '$foto'
                WHERE id = $id";
      mysqli_query($conn, $query) or die(mysqli_error($conn));
      return mysqli_affected_rows($conn);
    }
    function registrasi($data)
    {
        $conn = koneksi();
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username' ");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('username sudah digunakan');
                </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambah user baru
        $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
        mysqli_query($conn, $query_tambah);

        return mysqli_affected_rows($conn);
    }
    


?>