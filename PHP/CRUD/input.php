<?php
include 'function.php';

if ( isset($_POST["submit"]) ){

    if(tambah($_POST)>0){
        echo "
        <script>
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        "
        <script>
            document.location.href = 'index.php';
        </script>
        ";
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
    <title>latihan crud</title>
</head>

<body>``
    <h1>Input Data Baru</h1>
    <form action="input.php" method="post">
        <table>
            <tr>
                <td>NAMA </td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JURUSAN </td>
                <td>:</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN </td>
                <td>:</td>
                <td class="radio-container">
                    <input type="radio" name="kelamin" value="laki-laki">laki-laki
                    <input type="radio" name="kelamin" value="perempuan">perempuan
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>