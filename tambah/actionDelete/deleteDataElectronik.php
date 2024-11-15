<?php
include '../../koneksi.php';

$kd = $_GET['kdeletronik_020'];
mysqli_query($mysqli, "DELETE FROM tblelectronik_2359201020 WHERE kdeletronik_020 = '$kd'");

header("location: ../../database/databarangelektronik.php");
exit;
?>