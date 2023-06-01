<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>WDC Admin Panel</title>
    <link rel="stylesheet" href="./src/style/register.css" />
    <link rel="stylesheet" href="./src/style/reset.css" />
  </head>
  <body>
    <main>
      <form action="./src/php/registerFunction.php" method="post">
        <div class="login-container">
          <h1>REGISTER</h1>
          <div class="input-container">
            <input type="name" name="name" autocomplete="off" placeholder="name" require />
            <input type="email" name="email" autocomplete="off" placeholder="email" require />
            <input type="password" name="password" autocomplete="new-password" placeholder="password" require />
          </div>
          <button type="submit">Register</button>
          <p>Already have an Account? <a href="index.php">Login here</a></p>
        </div>
      </form>
    </main>
    <script src="./src/js/index.js"></script>
  </body>
</html>
