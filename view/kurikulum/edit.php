<?php 
    include '../../config/index.php';
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $nip = $_GET['nip'];
    $alamat = $_GET['alamat'];
    
    mysqli_query($koneksi, "UPDATE supervisi SET nama='$nama', nip='$nip', alamat='$alamat' WHERE id='$id'");
    
    header("location:index.php?pesan=update");
?>