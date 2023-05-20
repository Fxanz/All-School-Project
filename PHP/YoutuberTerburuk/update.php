<?php
$koneksi = mysqli_connect("localhost", "root", "", "pweb");

$id = $_GET['id'];

$tampil = mysqli_query($koneksi, "SELECT * FROM datayt WHERE id='$id'");
$hasil = mysqli_fetch_array($tampil);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $detail = $_POST['detail'];
    $tiktok = $_POST['tiktok'];
    $youtube = $_POST['youtube'];
    $instagram = $_POST['instagram'];
    mysqli_query($koneksi, "UPDATE datayt SET nama='$nama', deskripsi='$deskripsi', detail='$detail',youtube='$youtube',instagram='$instagram',tiktok='$tiktok' WHERE id='$id'");
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/update.css">
    <title>latihan crud</title>
</head>

<body>
    <div class="container">
    <h1>Update Data</h1>
    <form action="update.php?id=<?php echo $hasil['id']; ?>" method="post">
        <div class="wrapper">
            <p>nama</p>
            <input type="text" name="nama" value="<?=$_GET["nama"];?>">
        </div>
        <div class="wrapper">
            <p>deskripsi</p>
            <input type="text" name="deskripsi" value="<?=$_GET["deskripsi"];?>">
        </div>
        <div class="wrapper">
            <p>detail</p>
            <input type="text" name="detail" value="<?=$_GET["detail"];?>">
        </div>
        <div class="wrapper">
            <p>tiktok</p>
            <input type="text" name="tiktok" value="<?=$_GET["tiktok"];?>">
        </div>
        <div class="wrapper">
            <p>youtube</p>
            <input type="text" name="youtube" value="<?=$_GET["youtube"];?>">
        </div>
        <div class="wrapper">
            <p>instagram</p>
            <input type="text" name="instagram" value="<?=$_GET["instagram"];?>">
        </div>
        <input type="submit" name="submit">
    </form>
    </div>

</body>

</html>
