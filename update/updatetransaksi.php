<?php
include '../koneksi.php';
$no_order = $_POST['no_order_020'];
$kdeletronik = $_POST['kdelektronik_020'];
$jumlah = $_POST['jumlahbeli_020'];
$harga_beli = $_POST['hargabeli_020'];
mysqli_query($mysqli, "UPDATE tabel_detailtransaksi_235920120 SET kdelektronik_020='$kdeletronik', hargabeli_020='$harga_beli', jumlahbeli_020='$jumlah' WHERE no_order_020='$no_order'");

header("location:../database/transaksi.php?pesan=update");
?>