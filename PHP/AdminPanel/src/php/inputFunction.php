<?php
include 'connection.php';

$nama = $_POST['name'];
$kelamin = $_POST['kelamin'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO siswa (nama, kelamin, kelas, jurusan)
    VALUES ('$nama', '$kelamin', '$kelas', '$jurusan')";
$push = mysqli_query($koneksi, $query);

if ($push) {
    header('location: ../admin/data.php?');
} else {
    header('location: ../admin/data.php?');
}
