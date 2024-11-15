<?php
include '../../koneksi.php';

$kd = $_GET['dbkasir_020'];
mysqli_query($mysqli, "DELETE FROM tblkasir_2359201020 WHERE dbkasir_020 = '$kd'");

header("location: ../../database/datakasir.php");
exit;
?>