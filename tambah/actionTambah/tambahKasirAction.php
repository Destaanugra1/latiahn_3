<?php
include_once('../../koneksi.php');

$dbkasir_020 = $_POST['dbkasir_020'];
$namakasir_020 = $_POST['namakasir_020'];
$notelepon_020 = $_POST['notelepon_020'];
$alamat_020 = $_POST['alamat_020'];

mysqli_query ($mysqli, "INSERT INTO tblkasir_2359201020 VALUES ('$dbkasir_020', '$alamat_020', '$namakasir_020', $notelepon_020)");
header("location: ../../database/datakasir.php");

?>