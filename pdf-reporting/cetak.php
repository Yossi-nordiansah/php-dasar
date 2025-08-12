<?php
require 'lib.php';
require_once __DIR__ . '/vendor/autoload.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();
$html = '<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding=10 cellspacing=0>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>';
    foreach ($mahasiswa as $row) {
        $html.= '<tr>
                    <td>' . $i++ . '</td>
                    <td><img src="../gambar/'. $row["gambar"]. ' " alt="foto mahasiswa" style="width: 50px; display: block; margin: auto;"></td>
                    <td>'.$row["nim"].'</td>
                    <td>'.$row["nama"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["jurusan"].'</td>
                </tr>';
    }
$html.='</table>';
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar Mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
