<?php 
    include '../../config/index.php';
    $senin = $_POST['senin'];
    $selasa = $_POST['selasa'];
    $rabu = $_POST['rabu'];
    $kamis = $_POST['kamis'];
    $jumat = $_POST['jumat'];
    $sabtu = $_POST['sabtu'];
    $minggu = $_POST['minggu'];

    
    mysqli_query($koneksi, "INSERT INTO jadwal VALUES('','$senin','$selasa','$rabu','$kamis','$jumat','$sabtu','$minggu')");
    
    header("location:index.php?pesan=input");
?>