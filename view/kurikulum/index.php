<!DOCTYPE html>
    <html>
        <head>
            <title>Aplikasi Supervisi | Kurikulum</title>
            
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            
        </head>
        <body>
            <?php 

                session_start();
                if($_SESSION['status']!="login"){
                    header("location:../login.php?pesan=belum_login");
                }
                
                if(isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                    if($pesan == "input"){
                        echo "<script type='text/javascript'>alert('Data Berhasil Disimpan');</script>";
                    }else if($pesan == "update"){
                        echo "<script type='text/javascript'>alert('Data Berhasil Diupdate');</script>";
                    }else if($pesan == "hapus"){
                        echo "<script type='text/javascript'>alert('Data Berhasil Dihapus');</script>";
                    }
                }
            ?>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm p-3 mb-5 bg-black">
                <a class="navbar-brand" href="../dashboard.php">
                    <img src="../../assets/img/supervisor.png" class="d-inline-block align-top" alt="">
                    Aplikasi Supervisi
                </a>                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../supervisi/index.php">Supervisi</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Kurikulum <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../guru/index.php">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kepala_Sekolah/index.php">Kepala Sekolah</a>
                        </li>
                    </ul>
                    <a href="../logout.php" class="btn btn-danger mr-2">Logout</a>
                </div>
            </nav>

            <div class="container">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Supervisor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indexJadwal.php">Jadwal</a>
                    </li>
                </ul>
                <br><br>

                <div class="card" style="width: 70rem;">
                    <div class="card-body">
                    <h4 align='center'>Daftar Supervisi</h4>
                        <br>
                        <!-- ini bagian button input  -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalInput">Input supervisor</a>
                        <br><br>
                        <!-- ini bagian tabel  -->
                        <div class="form-group">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>NIP</th>
                                    <th>Alamat</th>
                                    <th width="170px">Action</th>
                                </tr>

                                <?php 
                                    include "../../config/index.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM supervisi");
                                    $nomor = 1;
                                    while($data = mysqli_fetch_array($query_mysql)){
            
                                ?>
                                    <tr>
                                    <td><?php echo $nomor++ ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['nip']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td>
                                        <a class="btn btn-secondary" href="#" type="button" data-toggle="modal" data-target="#modalEdit<?php echo $data['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a>
                                    </td>
                                </tr>

                                <?php
                                    include 'modal_Input.php';
                                    include 'modal_Edit.php';
                                ?>

                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
               
                
            </div>
            
        </body>
    </html>