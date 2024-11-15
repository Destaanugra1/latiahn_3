<?php
include '../../koneksi.php';

$kd = $_GET['no_order_020'];

// Hapus data terkait di tabel_detailtransaksi_235920120
mysqli_query($mysqli, "DELETE FROM tabel_detailtransaksi_235920120 WHERE no_order_020 = '$kd'");

// Hapus data di tbltransaksi_penjualan_2359201020
mysqli_query($mysqli, "DELETE FROM tbltransaksi_penjualan_2359201020 WHERE no_order_020 = '$kd'");

header("location: ../../database/datapelanggan.php");
exit;
?>