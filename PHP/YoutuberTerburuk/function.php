<?php 

$koneksi = mysqli_connect("localhost", "root", "", "pweb");

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
    $deskripsi =htmlspecialchars( $data["deskripsi"]);
    $detail =htmlspecialchars(  $data["detail"]);
    $youtube =htmlspecialchars(  $data["youtube"]);
    $instagram =htmlspecialchars(  $data["instagram"]);
    $tiktok =htmlspecialchars(  $data["tiktok"]);

    $query = "INSERT INTO datayt
    VALUES
    ('','$nama','$deskripsi','$detail','$youtube','$instagram','$tiktok')";
mysqli_query($koneksi, $query);
return mysqli_affected_rows($koneksi);
}

?>