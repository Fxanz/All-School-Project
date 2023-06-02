<?php
session_start();
include 'connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:../admin/admin.php");
} else {
    header("location:../../index.php");
}
