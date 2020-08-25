<?php 
    include '../../config/index.php';
    
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM supervisi WHERE id='$id'");
 
    header("location:index.php?pesan=hapus");
?>