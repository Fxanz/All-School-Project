<?php
$koneksi = mysqli_connect("localhost", "root", "", "pweb");
$youtuber = mysqli_query($koneksi, "SELECT * FROM datayt");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="style/style.css">
    <title>YoutuberTerburuk</title>
</head>
<body>

<h1 class="main-header">Daftar Youtuber Terburuk Di Dunia</h1>
<div class="input">
<h2>Punya tambahan?</h2>
<button>
<a href="tambah.php">Tambah Disini</a>

</button>

</div>
<div class="container">
<?php foreach ($youtuber as $yt): ?>
<main class="main">
    <span class="material-symbols-outlined human">
        account_circle
    </span>
    <h1 class="header"><?=$yt["nama"]?></h1>
    <h2 class="subheader"><?=$yt["detail"]?></h2>
    <div class="logo-wrapper">
    <button>
        <a href="<?=$yt["tiktok"]?>">
            <i class='bx bxl-tiktok' ></i>
        </a>
        <a href="detail.php?id=<?= $yt['id']; ?>&nama=<?= $yt['nama']; ?>&deskripsi=<?= $yt['deskripsi']; ?>">
            <i class='bx bx-info-circle'></i>
        </a>
      
        <a href="<?=$yt["youtube"]?>">
            <i class='bx bxl-youtube bx-flip-vertical' undefined ></i>
        </a>
        <a href="<?=$yt["instagram"]?>">
            <i class='bx bxl-instagram-alt' ></i>
        </a>
    </button>
    <button>
        <a href="delete.php?id=<?= $yt['id']; ?>">
            <span class="material-symbols-outlined control">
                delete
            </span>
        </a>
        <a href="update.php?id=<?= $yt['id']; ?>&nama=<?= $yt['nama']; ?>&detail=<?= $yt['detail']; ?>&deskripsi=<?= $yt['deskripsi']; ?>&youtube=<?= $yt['youtube']; ?>&instagram=<?= $yt['instagram']; ?>&tiktok=<?= $yt['tiktok']; ?>">
            <span class="material-symbols-outlined control">
                update
            </span>
        </a>
    </button>
    </div>

    </main>
<?php endforeach;?>
</div>
    <script src="Javascript/script.js"></script>
</body>
</html>