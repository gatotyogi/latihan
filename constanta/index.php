<?php
//menggunakan constanta
// const situs= "saroh.com";
// echo situs;

//menggunakan define
// define("situs", "saroh.com");
// echo situs;

/* menampilkan variabel dan konstanta*/
// $nama="saroh";
// define("GAJI", 1000000);
// echo $nama;
// echo "<br>";
// echo GAJI;
$nama="saroh";
$umur=23;
$kerja="Guru Honorer";
define("GAJI", 1000000);
// echo "Nama Saya $nama umur $umur pekerjaan $kerja dengan gaji /bulan Rp. ". GAJI;
echo "Nama: $nama";
echo "<br>";
echo "Umur: $umur";
echo "<br>";
echo "Pekerjaan: $kerja";
echo "<br>";
echo "Gaji: Rp. ".GAJI;
//satu baris
echo "<br><br>";
echo "Nama saya $nama, umur $umur tahun, pekerjaan $kerja dengan gaji Rp. ".GAJI;

?>