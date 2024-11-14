<?php
include '../koneksi.php';
$no_order = $_POST['no_order_020'];
$idcustomer = $_POST['idcustemer_020'];
$uang = $_POST['uang_muka_020'];
$idkasir = $_POST['idkasir_020'];
mysqli_query($mysqli, "UPDATE tbltransaksi_penjualan_2359201020 SET idcustemer_020='$idcustomer', uang_muka_020='$uang', idkasir_020='$idkasir' WHERE no_order_020='$no_order'");

header("location:../database/datapenjual.php?pesan=update");
?>