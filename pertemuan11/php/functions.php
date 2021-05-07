<?php 
    // function untuk melakukan koneksi ke database dan memilih database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_203040049");

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

function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $img = htmlspecialchars($data["img"]);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email   = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // query insert data
    $query = "INSERT INTO mahasiswa
              VALUES
              (null, '$img', '$nama', '$nrp', '$email', '$jurusan');
              ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}
function hapus($id){
    $conn = koneksi();
    
    $query = "DELETE FROM `mahasiswa` WHERE id = '$id'";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa SET
              nama = '$nama',
              nrp = '$nrp',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
