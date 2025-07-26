<?php
//membuat array versi lama
$hari = array("Senin", "Selasa", "Rabu");

//membuat array versi baru
$bulan = ["Januari", "Februari", "Maret"];

//menampilkan array
//var_dump
var_dump($hari);
echo "<br>";

//print_r
print_r($bulan);
echo "<br>";

//menampilkan satu elemen pada array
echo $bulan[1];

//menambahkan element baru pada akhir array
$hari[] = "Kamis";
echo "<br>";
print_r($hari);
?>