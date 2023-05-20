<?php 

$koneksi = mysqli_connect("localhost", "root", "", "crudrpl1");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;
    $nama =htmlspecialchars( $data["nama"]);
    $jurusan =htmlspecialchars( $data["jurusan"]);
    $kelamin =htmlspecialchars(  $data["kelamin"]);

    $query = "INSERT INTO identitas
    VALUES
    ('','$nama','$jurusan','$kelamin')";
mysqli_query($koneksi, $query);
return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

?>