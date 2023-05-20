<?php 
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Tampil </title>
</head>

<body>
    <h1>Identitas Mahasiswa</h1>
    <p><a href="input.php">tambah data</a></p>
    <table border="5" class="show">
        <tr>
            <th>Nomer</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Jnskel</th>
            <th>aksi</th>
        </tr>
        <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM identitas");
        $no = 1;
        while ($hasil = mysqli_fetch_array($tampil)) {

        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['jurusan']; ?></td>
                <td><?php echo $hasil['kelamin']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $hasil['id']; ?>">EDIT</a> | <a href="delete.php?id=<?php echo $hasil['id']; ?>">DELETE
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>