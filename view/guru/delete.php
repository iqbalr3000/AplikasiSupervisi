<?php 
    include '../../config/index.php';
    
    $id_file = $_GET['id_file'];
    mysqli_query($koneksi, "DELETE FROM upload WHERE id_file='$id_file'");
 
    header("location:index.php?pesan=hapus");
?>