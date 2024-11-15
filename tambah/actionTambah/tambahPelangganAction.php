<?php
include_once('../../koneksi.php');

$idcastomer_020 = $_POST['idcastomer_020'];
$namacustemer_020 = $_POST['namacustemer_020'];
$alamat_020 = $_POST['alamat_020'];
$notelepon_020 = $_POST['notelepon_020'];

mysqli_query ($mysqli, "INSERT INTO tblcustomer_2359201020 VALUES ('$idcastomer_020', '$namacustemer_020', '$alamat_020', '$notelepon_020')");
header("location: ../../database/datapelanggan.php");

?>