<?php
include '../koneksi.php';
$dbkasir = $_POST['dbkasir_020'];
$nama = $_POST['namakasir_020'];
$alamat = $_POST['alamat_020'];
$telephone = $_POST['notelepon_020'];
mysqli_query($mysqli, "UPDATE tblkasir_2359201020 SET namakasir_020='$nama', notelepon_020='$telephone', alamat_020='$alamat' WHERE dbkasir_020='$dbkasir'");

header("location:../database/datakasir.php?pesan=update");
?>