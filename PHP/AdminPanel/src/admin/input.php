<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>WDC Admin Panel</title>
    <link rel="stylesheet" href="../style/reset.css" />
    <link rel="stylesheet" href="../style/input.css" />
  </head>
  <body>
    <main>
      <form action="../php/inputFunction.php" method="post">
        <div class="login-container">
          <h1>INPUT DATA</h1>
          <div class="input-container">
            <input type="name" name="name" autocomplete="off" placeholder="name" require />
            <input type="kelamin" name="kelamin" autocomplete="off" placeholder="kelamin" require />
            <input type="kelas" name="kelas" autocomplete="off" placeholder="kelas" require />
            <input type="jurusan" name="jurusan" autocomplete="off" placeholder="jurusan" require />
          </div>
          <button type="submit">Input Data</button>
          <p>Dont want to input data? <a href="./data.php">Exit here</a></p>
        </div>
      </form>
    </main>
    <script src="./src/js/index.js"></script>
  </body>
</html>
