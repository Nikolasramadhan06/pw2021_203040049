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

    function tambah($data)
    {
        $conn = koneksi();
        $jenis = htmlspecialchars($data['jenis']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $Stok = htmlspecialchars($data['Stok']);
        $Foto = htmlspecialchars($data['Foto']);

        $query = "INSERT INTO sorum_mobil
                        VALUE
                        ('', '$jenis', '$deskripsi', '$harga', '$Stok', '$Foto')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM sorum_mobil WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
?>
    
