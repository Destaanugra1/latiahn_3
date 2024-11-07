<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Pelanggan</title>
</head>
<body>
    <h3>UBAH data Penjual</h3>
    <?php
    include "../koneksi.php";
    $no_order_020 = $_GET['no_order_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tbltransaksi_penjualan_2359201020 WHERE no_order_020='$no_order_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatepenjual.php" method="post">
        <table>
            <tr>
                <td>Order</td>
                <td>
                    <input type="hidden" name="no_order_020" value="<?php echo $user_data['no_order_020'] ?>">
                    <input type="text" name="tbl_order_020" value="<?php echo $user_data['tbl_order_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>data customer</td>
                <td><input type="text" name="idcustemer_020" value="<?php echo $user_data['idcustemer_020'] ?>"></td>
            </tr>
            <tr>
                <td>Uang</td>
                <td><input type="text" name="uang_muka_020" value="<?php echo $user_data['uang_muka_020'] ?>"></td>
            </tr>
            <tr>
                <td>Id kasir</td>
                <td><input type="text" name="idkasir_020" value="<?php echo $user_data['idkasir_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
