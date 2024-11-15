<?php
include_once('../../koneksi.php');

$no_order_020 = $_POST['no_order_020'];
$kdelektronik_020 = $_POST['kdelektronik_020'];
$jumlahbeli_020 = $_POST['jumlahbeli_020'];
$hargabeli_020 = $_POST['hargabeli_020'];

header("location: ../../database/transaksi.php");
?>