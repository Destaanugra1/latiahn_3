<?php
include_once('../../koneksi.php');

$no_order_020 = $_POST['no_order_020'];
$tbl_order_020 = $_POST['tbl_order_020'];
$idcustemer_020 = $_POST['idcustemer_020'];
$uang_muka_020 = $_POST['uang_muka_020'];
$idkasir_020 = $_POST['idkasir_020'];

mysqli_query ($mysqli, "INSERT INTO tbltransaksi_penjualan_2359201020 VALUES ('$no_order_020', '$uang_muka_020', '$tbl_order_020', $idcustemer_020, $idkasir_020)");
header("location: ../../database/datapenjual.php");
?>