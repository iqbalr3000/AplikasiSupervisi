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
                        <a class="nav-link" href="index.php">Supervisor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="indexJadwal.php">Jadwal</a>
                    </li>
                </ul>
                <br><br>

                <div class="card" style="width: 70rem;">
                    <div class="card-body">
                        <!-- ini bagian tabel jadwal  -->
                        <h4 align='center'>Jadwal Supervisi</h4>
                        <br>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalJadwal">+</a>
                        <br><br>
                        <div class="form-group">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Senin</th>
                                    <th>Selasa</th>
                                    <th>Rabu</th>
                                    <th>Kamis</th>
                                    <th>Jum'at</th>
                                    <th>Sabtu</th>
                                    <th>Minggu</th>
                                </tr>
                                <?php 
                                    include "../../config/index.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM jadwal");
                                    while($data = mysqli_fetch_array($query_mysql)){
                                ?>
                                <tr>
                                    <td><?php echo $data['senin']; ?></td>
                                    <td><?php echo $data['selasa']; ?></td>
                                    <td><?php echo $data['rabu']; ?></td>
                                    <td><?php echo $data['kamis']; ?></td>
                                    <td><?php echo $data['jumat']; ?></td>
                                    <td><?php echo $data['sabtu']; ?></td>
                                    <td><?php echo $data['minggu']; ?></td>
                                </tr>

                                <?php
                                    include 'modal_Jadwal.php';
                                ?>

                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </body>
    </html>