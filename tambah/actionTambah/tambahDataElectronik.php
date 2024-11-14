<?php
include_once('../../koneksi.php');

$kdeletronik_020 = $_POST['kdeletronik_020'];
$namaeletronik_020 = $_POST['namaeletronik_020'];
$jeniseletronik_020 = $_POST['jeniseletronik_020'];
$hargaeletronik_020 = $_POST['hargaeletronik_020'];
$stok_020 = $_POST['stok_020'];

mysqli_query ($mysqli, "INSERT INTO tblelectronik_2359201020 VALUES ('$kdeletronik_020', '$namaeletronik_020', $hargaeletronik_020, '$jeniseletronik_020', '$stok_020')");
header("location: ../../database/databarangelektronik.php");

?>