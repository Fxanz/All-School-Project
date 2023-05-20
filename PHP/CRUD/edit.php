<?php
$koneksi = mysqli_connect("localhost", "root", "", "crudrpl1");

$id = $_GET['id'];

$tampil = mysqli_query($koneksi, "SELECT * FROM identitas WHERE id='$id'");
$hasil = mysqli_fetch_array($tampil);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelamin = $_POST['kelamin'];
    mysqli_query($koneksi, "UPDATE identitas SET nama='$nama', jurusan='$jurusan', kelamin='$kelamin' WHERE id='$id'");
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EDIT</title>
</head>

<body>
    <h1>Edit</h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $hasil['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" value="<?php echo $hasil['jurusan'] ?>"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN </td>
            <td>:</td>
            <td>
                <input type="radio" name="kelamin" value="laki-laki" <?php if ($hasil['kelamin'] == 'Laki-Laki') echo 'checked'; ?>>laki-laki
                <input type="radio" name="kelamin" value="perempuan" <?php if ($hasil['kelamin'] == 'Perempuan') echo 'checked'; ?>>perempuan
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="submit"></td>
        </tr>
    </table>
</form>
</body>

</html>