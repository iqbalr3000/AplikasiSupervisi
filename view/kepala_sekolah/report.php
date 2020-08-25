<?php
    include '../../config/index.php';
    require_once '../../assets/dompdf/autoload.inc.php';

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $queryRpm = mysqli_query($koneksi,"select * from upload");

    // tabel rpm
    $html = '<center><h1>Laporan Supervisi</h1></center><hr/><br/></br>';
    $html .= '<body>
                <center><h3>Daftar RPM</h3></center>
                <br/>
                    <table border="1" width="100%">
                        <tr>
                            <th width="50px">No</th>
                            <th>Name File</th>
                            <th width="150px">Pengunggah</th>
                            <th width="150px">Status</th>
                        </tr>';
                        
                        $no = 1;
                        while($row = mysqli_fetch_array($queryRpm))
                        {
                            $html .= 
                            "<tr>
                                <td>".$no."</td>
                                <td>".$row['nama_file']."</td>
                                <td>".$row['pengunggah']."</td>
                                <td>".$row['status']."</td>
                            </tr>";
                            $no++;
                        };
    $html .= "</html>";

    $dompdf->loadHtml($html);
    // Setting ukuran dan orientasi kertas
    $dompdf->setPaper('A4', 'potrait');
    // Rendering dari HTML Ke PDF
    $dompdf->render();
    // Melakukan output file Pdf
    $dompdf->stream('laporan_supervisi.pdf');
?>