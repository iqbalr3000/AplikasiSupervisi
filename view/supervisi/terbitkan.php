<?php
    include '../../config/index.php';

    $id_file = $_GET['id_file'];
    $sql = "UPDATE upload SET status='Terbit' WHERE id_file=$id_file";
    
    if ($koneksi->query($sql) === TRUE) {
      echo "Record updated successfully";
      header("location:index.php?pesan=update");

    } else {
      echo "Error updating record: " . $koneksi->error;
      header("location:index.php?pesan=update_gagal");

    }
    
?>