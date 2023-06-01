<?php
include 'connection.php';
$nama = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO user (nama, email, password, status)
    VALUES ('$nama', '$email', '$password', 1)";
$push = mysqli_query($koneksi, $query);

if ($push) {
    header('location: ../../index.php?');
} else {
    header('location: ../../register.php?');
}
