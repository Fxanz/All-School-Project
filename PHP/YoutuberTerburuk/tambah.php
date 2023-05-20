<?php
include 'function.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        "
        <script>
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/tambah.css">
    <title>latihan crud</title>
</head>

<body>
    <div class="container">
    <h1>Input Data Baru</h1>
    <form action="tambah.php" method="post">
        <div class="wrapper">
            <p>nama</p>
            <input type="text" name="nama">
        </div>
        <div class="wrapper">
            <p>deskripsi</p>
            <input type="text" name="deskripsi">
        </div>
        <div class="wrapper">
            <p>detail</p>
            <input type="text" name="detail">
        </div>
        <div class="wrapper">
            <p>youtube</p>
            <input type="text" name="youtube">
        </div>
        <div class="wrapper">
            <p>instagram</p>
            <input type="text" name="instagram">
        </div>
        <div class="wrapper">
            <p>tiktok</p>
            <input type="text" name="tiktok">
        </div>
        <input type="submit" name="submit">
    </form>
    </div>

</body>

</html>
