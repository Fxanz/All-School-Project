<?php
    include 'control.php';
    include '../php/connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data panel</title>
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/data.css">
</head>
<body>
    <main>
        <div class="sidebar">
            <div class="main-sidebar">
                <div class="header-sidebar">
                <a href="#">
                <img src="../assets/images/Home.svg" alt="logo home for admin panel" >
                </a>
                </div>
              
                <div class="links">
                    <a href="./admin.php">
                    <div class="link">
                        <img src="../assets/images/Home.svg" alt="Home Logo" width="30px" height="30px">
                    </div>
                    </a>
                    <a href="./data.php">
                    <div class="link">
                        <img src="../assets/images/data.svg" alt="Data Logo" width="30px" height="30px">
                    </div>
                    </a>
                   
                </div>
            </div>
            <div class="exit-sidebar">
                <a href="../php/logout.php">
                    <div class="exit">
                    <img src="../assets/images/exit.svg" alt="Exit Logo" width="30px" height="30px">
                    </div>
                    
                </a>
            </div>
        </div>
        <div class="content">
            <h1>All Student</h1>
            <a href="input.php">
            <button>Input Data</button>
            </a>
            <table class="show">
        <tr class="table-header">
            <th>Nomer</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>aksi</th>
        </tr>
        <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM siswa");
        $no = 1;
        while ($hasil = mysqli_fetch_array($tampil)) {

        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['kelamin']; ?></td>
                <td><?php echo $hasil['kelas']; ?></td>
                <td><?php echo $hasil['jurusan']; ?></td>
                <td>
                    <div class="action-container">
                    <a href="./edit.php?id=<?php echo $hasil['id']; ?>">EDIT</a> | <a href="../php/delete.php?id=<?php echo $hasil['id']; ?>">DELETE
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
        </div>
    </main>
</body>
</html>