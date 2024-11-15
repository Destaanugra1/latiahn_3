<?php
include '../../koneksi.php';

$kd = $_GET['idcastomer_020'];
mysqli_query($mysqli, "DELETE FROM tblcustomer_2359201020 WHERE idcastomer_020 = '$kd'");

header("location: ../../database/datapelanggan.php");
exit;
?>