<?php 
    // function untuk melakukan koneksi ke database dan memilih database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040049");
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

    // function untuk mengubah format tampilan int harga kedalam format rupiah
    function ubahRupiah($angka){
        return "Rp" . number_format($angka,2,',','.');
    }

    // function untuk menambahkan data pada tambah.php kedalam database
    function tambah($data)
    {
        $conn = koneksi();
        $Jenis = htmlspecialchars($data['Jenis']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $Stok = htmlspecialchars($data['Stok']);
        $Foto = htmlspecialchars($data['Foto']);

        $query = "INSERT INTO sorum_mobil
                        VALUE
                        ('', '$Jenis', '$deskripsi', '$harga', '$Stok', '$Foto')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // function untuk menghapus data sesuai dengan id yang dikirimkan dari hapus.php
    function hapus($id){
        $conn = koneksi();
        
        $query = "DELETE FROM `sorum_mobil` WHERE id = '$id'";
        
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    // function untuk mengupdate data sesuai dengan data yang dikirimkan dari ubah.php
   function ubah($data)
    {
        $conn = koneksi();
        $id = $data['id'];
        $Jenis = htmlspecialchars($data['Jenis']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $Stok = htmlspecialchars($data['Stok']);
        $Foto = htmlspecialchars($data['Foto']);

        $query = "UPDATE soroum_mobil
                SET
                Jenis = '$Jenis',
                deskripsi = '$deskripsi',
                harga = '$harga',
                Foto = '$Foto',
                WHERE id = '$id'
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($data)
    {
        $items = query("SELECT * FROM sorum_mobil");

        if(isset($_GET['cari'])){
            $keyword = $_GET['keyword'];
            $items = query("SELECT * FROM `sorum_mobil` WHERE `Jenis` LIKE '%$keyword%' OR ` deskripsi` LIKE '%$keyword%' OR `harga` LIKE '%$keyword%' OR Stok LIKE '%$keyword%'");
        }else{
            $items = query("SELECT * FROM FROM sorum_mobil");
        }
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