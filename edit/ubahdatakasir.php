<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Kasir</title>
</head>
<body>
    <h3>UBAH data kasir</h3>
    <?php
    include "../koneksi.php";
    $kdeletronik_020 = $_GET['dbkasir_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tblkasir_2359201020 WHERE dbkasir_020 ='$kdeletronik_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatekasir.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="dbkasir_020" value="<?php echo $user_data['dbkasir_020'] ?>">
                    <input type="text" name="namakasir_020" value="<?php echo $user_data['namakasir_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_020" value="<?php echo $user_data['alamat_020'] ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
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
