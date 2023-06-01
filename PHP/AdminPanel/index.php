<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WDC Admin Panel</title>
    <link rel="stylesheet" href="./src/style/index.css" />
    <link rel="stylesheet" href="./src/style/reset.css" />
  </head>
  <body>
    <main>
      <form action="./src/php/loginFunction.php" method="post">
        <div class="login-container">
          <h1>LOGIN</h1>
          <div class="input-container">
            <input type="email" name="email" autocomplete="off" placeholder="email" require />
            <input type="password" name="password" autocomplete="new-password" placeholder="password" require />
          </div>
          <button type="submit">Login</button>
          <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
      </form>
    </main>
    <script src="./src/js/index.js"></script>
  </body>
</html>
