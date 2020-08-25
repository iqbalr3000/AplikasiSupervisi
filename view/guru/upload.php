<?php 
    include '../../config/index.php';

    $username = $_GET['username'];

    if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('png', 'jpg', 'jpeg', 'pdf', 'docx', 'xlsx', 'ppt', 'txt');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['file']['tmp_name'];
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			move_uploaded_file($file_tmp, '../../assets/hasil_upload/'.$nama);
            $query = mysqli_query($koneksi, "INSERT INTO upload VALUES(NULL, '$nama', 'Dilihat', '$username')");
            if($query){
                echo 'FILE BERHASIL DI UPLOAD';
                header("location:index.php?pesan=upload");
            }else{
                echo 'GAGAL MENGUPLOAD FILE';
                header("location:index.php?pesan=upload_gagal");
            }
	    }else{
            echo 'Upload Gagal Ekstensi tidak diperbolehkan';
            header("location:index.php?pesan=upload_gagal");
	    }
    }
?>