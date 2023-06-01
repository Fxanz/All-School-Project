<?php 
include 'connection.php';
$id = $_GET["id"];
$query = "DELETE FROM siswa WHERE id = $id";
$push = mysqli_query($koneksi, $query);

if ($push) {
    header('location: ../admin/data.php?');
} else {
    header('location: ../admin/data.php?');
}
