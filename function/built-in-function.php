<?php
//date 
 echo date("Y-m-d");
 echo date("Y-m-d H:i:s");
 echo date("l");

 //time
 echo time();
 echo date("l", time()+60*60*24*3);
 
 //mktime
 // membuat detik sesuai keinginan (realtif dari tanggal 1 januari 1970)
 // mktime(0, 0, 0, 0, 0, 0) (jam, menit, detik, bulan, tanggal, tahun)
 echo mktime(0, 0, 0, 7, 13, 1999);
 echo date("l", mktime(0, 0, 0, 7, 13, 1999));

 //strtotime (merubah string format tanggal ke timestamp)
 echo date("l", strtotime("13 jul 1999"));

 //strlen() untuk menghitung panjang string
 //strcmp() menggabungkan string
 //explode() merubah string menjadi array
 //htmpspecialchars() security

 //isset() cek apakah variable sudah dibuat atau belum (bool)
 //empty() cek variabel ada atau tidak (bool)
 //die() menghentikan program
 //sleep() menghentikan sementara
?>