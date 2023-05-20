<?php
$koneksi = mysqli_connect("localhost", "root", "", "pweb");


    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi,"DELETE FROM datayt WHERE id = $id");
        return mysqli_affected_rows($koneksi);
    }

    $id = $_GET["id"];
    
    if(hapus($id)>0){
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
    
?>