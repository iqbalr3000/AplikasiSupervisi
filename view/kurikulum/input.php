<?php 
    include '../../config/index.php';
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    
    mysqli_query($koneksi, "INSERT INTO supervisi VALUES('','$nama','$nip','$alamat')");
    
    header("location:index.php?pesan=input");
?>