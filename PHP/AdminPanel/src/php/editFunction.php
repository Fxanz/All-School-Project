<?php 
include '../php/connection.php';
$id = $_GET['id'];

$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "UPDATE siswa SET nama='$nama', kelamin='$kelamin', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'";
$push = mysqli_query($koneksi, $query);

if ($push) {
    header('location: ../admin/data.php?');
} else {
    header('location: ../admin/data.php?');
}
?>