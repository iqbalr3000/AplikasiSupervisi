<!DOCTYPE html>
    <html>
        <head>
            <title>Aplikasi Supervisi | Supervisor</title>
            
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

                include "../../config/index.php";
                if(isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                    if($pesan == "input"){
                        echo "<script type='text/javascript'>alert('Data Berhasil Disimpan');</script>";
                    }else if($pesan == "update"){
                        echo "<script type='text/javascript'>alert('Data Berhasil Diupdate');</script>";
                    }else if($pesan == "hapus"){
                        echo "<script type='text/javascript'>alert('Data Berhasil Dihapus');</script>";
                    }else if($pesan == "update_gagal"){
                        echo "<script type='text/javascript'>alert('Data Gagal Diupdate');</script>";
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
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Supervisi <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kurikulum/index.php">Kurikulum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../guru/index.php">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kepala_sekolah/index.php">Kepala Sekolah</a>
                        </li>
                    </ul>
                    <a href="../logout.php" class="btn btn-danger mr-2">Logout</a>
                </div>
            </nav>

            <div class="container">
                <h4 align='center'>Daftar RPM</h4>
                <br>
                <!-- ini bagian seacrh bar  -->
                <form action="index.php" method="get" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari..." required>	
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Cari">	
                </form>
                <br>

                <?php 
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        echo "<b>Hasil pencarian : ".$cari."</b>";
                    }
                ?>
                
                <!-- ini bagian tabel  -->
                <div class="form-group">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th width="100px">File</th>
                            <th>Name File</th>
                            <th width="150">Pengunggah</th>
                            <th width="100px">Status</th>
                            <th width="280px">Action</th>
                        </tr>

                        <?php 
                            if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM upload where nama_file like '%".$cari."%'");				
                            }else{
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM upload");		
                            }
                            $nomor = 1;
                            while($data = mysqli_fetch_array($query_mysql)){
                        ?>
                            <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td>
                                <a class="btn btn-success" href="../../assets/hasil_upload/<?php echo $data['nama_file']; ?>">Lihat</a>
                            </td>
                            <td><?php echo $data['nama_file']; ?></td>
                            <td><?php echo $data['pengunggah']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <td>
                                <a href="terbitkan.php?id_file=<?php echo $data['id_file']; ?>" class="btn btn-primary">Terbitkan</a>
                                <a href="revisi.php?id_file=<?php echo $data['id_file']; ?>" class="btn btn-secondary">Revisi</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

        </body>
    </html>