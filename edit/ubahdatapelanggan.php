<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Pelanggan</title>
</head>
<body>
    <h3>UBAH data Pelanggan</h3>
    <?php
    include "../koneksi.php";
    $idcastomer_020 = $_GET['idcastomer_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tblcustomer_2359201020 WHERE idcastomer_020='$idcastomer_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatepelanggan.php" method="post">
        <table>
            <tr>
                <td>Nama Electronik</td>
                <td>
                    <input type="hidden" name="idcastomer_020" value="<?php echo $user_data['idcastomer_020'] ?>">
                    <input type="text" name="namacustemer_020" value="<?php echo $user_data['namacustemer_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_020" value="<?php echo $user_data['alamat_020'] ?>"></td>
            </tr>
            <tr>
                <td>Telephone</td>
                <td><input type="text" name="notelepon_020" value="<?php echo $user_data['notelepon_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
