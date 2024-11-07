<?php
include '../koneksi.php';
$kdbarang = $_POST['kdeletronik_020'];
$nama = $_POST['namaeletronik_020'];
$jenis = $_POST['jeniseletronik_020'];
$harga = $_POST['hargaeletronik_020'];
$stok = $_POST['stok_020'];

mysqli_query($mysqli, "UPDATE tblelectronik_2359201020 SET namaeletronik_020='$nama', hargaeletronik_020='$harga', jeniseletronik_020='$jenis', stok_020='$stok' WHERE kdeletronik_020='$kdbarang'");

header("location:../database/databarangelektronik.php?pesan=update");
?>