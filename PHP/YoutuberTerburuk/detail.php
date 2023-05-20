<?php
if (!isset($_GET["id"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["deskripsi"])
) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="style/detail.css">
    <title>Detail</title>
</head>
<body>

    <div class="container">
    <span class="material-symbols-outlined human">
        account_circle
    </span>
    <h1 class="header"><?=$_GET["nama"];?></h1>
    <p class="subheader"><?=$_GET["deskripsi"];?></p>
<a href="index.php">Kembali</a>
</div>

</body>
</html>