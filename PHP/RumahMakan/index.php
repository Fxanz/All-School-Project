<?php
$hasil = 0;
if (isset($_POST['submit'])) {
    $uang = $_POST['uang'];
    $harga = $_POST['harga'];
    $sumbangan = $_POST['sumbangan'];
    $hasil = $uang - $harga;
    if (in_array($sumbangan, ["iya", "Iya", "Yes", "yes", "y"], true)) {
        $hasil = $uang - ($harga + 5000);
    } else {
        $hasil = $uang - $harga;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/0f8a1c907d.css" crossorigin="anonymous">
    <title>Rumah Makan</title>
</head>
<body>
<div class="container hidden" id="container">
<form method="post" action="index.php">
  <h1 class="main-header">Rumah Makan Yoga</h1>
        <div class="input-container">
          <p class="heading">Nama Customer</p>
          <input type="text" name="nama" autocomplete="off" placeholder="Masukan Namamu">
        </div>
        <div class="input-container">
          <p class="heading">Menu Makanan</p>
          <select name="makanan" id="makanan" onchange="updateHarga()" class="custom-dropdown">
            <option value="" disabled selected hidden class="first-option">-- Pilih Makanan --</option>
            <option value="ikan" data-harga="10000">Ikan Bakar - Rp 10.000</option>
            <option value="lele" data-harga="15000">Lele Goreng - Rp 15.000</option>
            <option value="gulai" data-harga="20000">Gulai Ayam - Rp 20.000</option>
            <option value="pepes" data-harga="25000">Pepes Ikan - Rp 25.000</option>
            <option value="cumi" data-harga="50000">Cumi-Cumi Bakar - Rp 50.000</option>
          </select>

        </div>
        <div class="input-container">
          <p class="heading">Harga</p>
          <input type="text" name="harga" id="harga" readonly placeholder="Harga Disini">
        </div>
        <div class="input-container">
          <p class="heading">Uang Pelanggan</p>
          <input type="text" name="uang" autocomplete="off" inputmode="numeric" placeholder="Total Bayar">
        </div>
        <div class="input-container">
          <p class="heading">Sumbangan</p>
          <input type="text" name="sumbangan" autocomplete="off" placeholder="Iya/Tidak">
        </div>
        <div class="input-container">
          <input class="submit" type="submit" name="submit" >
        </div>
        </div>

</form>
</div>
<?php if (isset($_POST["submit"])): ?>
        <div class="container2 hidden" id="container2">
        <div class="input-container">
          <p> Nama Pengunjung </p>
          <?=$_POST["nama"];?>
        </div>
        <div class="input-container">
          <p> Menu Makanan </p>
          <?=$_POST["makanan"];?>
        </div>
        <div class="input-container">
          <p> Harga </p>
          Rp. <?=$_POST["harga"];?>
        </div>
        <div class="input-container">
          <p> Uang Pelanggan </p>
          Rp. <?=$_POST["uang"];?>
        </div>
        <div class="input-container">
          <p> Sumbangan </p>
          <?=$_POST["sumbangan"];?>
        </div>
        <div class="input-container">
          <p> Kembalian </p>
          <?=$hasil?>
        </div>

        <div class="kembali-container">
              <button id="kembali">X</button>
        </div>
      </div>

    <?php endif;?>
    <script src="script.js"></script>
</body>
</html>

