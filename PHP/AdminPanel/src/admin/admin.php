<?php
    include 'control.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../style/reset.css" />
    <link rel="stylesheet" href="../style/admin.css" />
  </head>
  <body>
    <main>
      <div class="sidebar">
        <div class="main-sidebar">
          <div class="header-sidebar">
            <a href="#">
              <img src="../assets/images/Home.svg" alt="logo home for admin panel" />
            </a>
          </div>

          <div class="links">
            <a href="./admin.php">
              <div class="link">
                <img src="../assets/images/Home.svg" alt="Home Logo" width="30px" height="30px" />
              </div>
            </a>
            <a href="./data.php">
              <div class="link">
                <img src="../assets/images/data.svg" alt="Data Logo" width="30px" height="30px" />
              </div>
            </a>
          </div>
        </div>
        <div class="exit-sidebar">
          <a href="../php/logout.php">
            <div class="exit">
              <img src="../assets/images/exit.svg" alt="Exit Logo" width="30px" height="30px" />
            </div>
          </a>
        </div>
      </div>
      <div class="content">
        <h1>
          Halo
          <?= $rw['nama']; ?>
        </h1>
        <p>
          WDC Admin Panel adalah sebuah website yang dirancang untuk menjadi admin panel yang memudahkan pengguna dalam mengelola data siswa. Website ini memiliki fitur login dan register untuk mengakses admin panel. Setelah berhasil login,
          pengguna akan dibawa ke halaman utama admin panel yang terbagi menjadi dua bagian.
        </p>
        <p>
          Bagian pertama dari admin panel ini merupakan tempat untuk menjelaskan tentang project yang dibuat. Pengguna dapat menambahkan deskripsi dan informasi terkait proyek tersebut. Hal ini memungkinkan pengguna untuk memberikan konteks
          dan pengenalan tentang tujuan dan ruang lingkup proyek kepada pengguna lain yang mengakses admin panel.
        </p>
        <p>
          Bagian kedua dari admin panel adalah project CRUD (Create, Read, Update, Delete) yang berfokus pada pengelolaan data siswa. Pengguna dapat melihat data siswa yang telah ada dalam bentuk tabel yang terstruktur. Tabel ini
          menampilkan informasi penting seperti nama siswa, nomor induk, kelas, dan lainnya. Pengguna juga dapat melakukan aksi pengeditan, penghapusan, dan penambahan data siswa baru melalui antarmuka yang intuitif dan mudah digunakan.
        </p>
        <p>
          Dengan adanya fitur CRUD, pengguna dapat dengan cepat dan efisien mengelola data siswa yang ada. Misalnya, pengguna dapat mengedit informasi siswa jika ada perubahan, menghapus data siswa yang sudah tidak relevan, atau menambahkan
          data siswa baru ke dalam sistem. Fitur ini memungkinkan pengguna untuk menjaga data siswa tetap terorganisir dan terkini sesuai kebutuhan.
        </p>
        <p>
          WDC Admin Panel memberikan keuntungan bagi pengguna dalam hal manajemen data siswa. Dengan antarmuka yang user-friendly dan fitur CRUD yang kuat, pengguna dapat dengan mudah mengelola data siswa tanpa perlu pengetahuan teknis yang
          mendalam. Selain itu, kemampuan untuk memberikan deskripsi proyek juga memungkinkan pengguna untuk berbagi informasi penting dan menjelaskan tujuan proyek dengan lebih baik. Dengan demikian, WDC Admin Panel menjadi solusi efektif
          dan efisien dalam mengelola data siswa dalam sebuah proyek.
        </p>
      </div>
    </main>
  </body>
</html>
