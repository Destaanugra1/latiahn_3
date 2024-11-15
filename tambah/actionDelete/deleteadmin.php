<?php
include 'koneksi.php';

$kd = $_GET['kdelektronik_017'];
mysqli_query($mysqli, "DELETE FROM tbl_elektronik_2359201017 WHERE kdelektronik_017 = '$kd'");

header("location: /toko_elektronik_kita/index.php?pesan=update");
?>