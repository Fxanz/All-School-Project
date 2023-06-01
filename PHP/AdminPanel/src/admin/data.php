<?php
    include 'control.php';
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
                        <img src="../assets/images/Home.svg" alt="Home Logo" width="40px" height="40px">
                        <h2>Home</h2>
                    </div>
                    </a>
                    <a href="./data.php">
                    <div class="link">
                        <img src="../assets/images/data.svg" alt="Data Logo" width="40px" height="40px">
                        <h2>Data</h2>
                    </div>
                    </a>
                   
                </div>
            </div>
            <div class="exit-sidebar">
                <a href="../php/logout.php">
                    <div class="exit">
                    <img src="../assets/images/exit.svg" alt="Exit Logo" width="40px" height="40px">
                    <h2>Exit</h2>
                    </div>
                    
                </a>
            </div>
        </div>
        <div class="content">
            <h1>All Student</h1>
            <a href="input.php">
            <button>Input Data</button>
            </a>
        </div>
    </main>
</body>
</html>