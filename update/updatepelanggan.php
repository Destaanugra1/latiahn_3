<?php
include '../koneksi.php';
$idcustomer = $_POST['idcastomer_020'];
$nama = $_POST['namacustemer_020'];
$alamat = $_POST['alamat_020'];
$telephone = $_POST['notelepon_020'];
mysqli_query($mysqli, "UPDATE tblcustomer_2359201020 SET namacustemer_020='$nama', notelepon_020='$telephone', alamat_020='$alamat' WHERE idcastomer_020='$idcustomer'");

header("location:../database/datapelanggan.php?pesan=update");
?>