<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Pelanggan</title>
</head>
<body>
    <h3>UBAH data Pelanggan</h3>
    <?php
    include "../koneksi.php";
    $no_order_020 = $_GET['no_order_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tabel_detailtransaksi_235920120 WHERE no_order_020='$no_order_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatetransaksi.php" method="post">
        <table>
            <tr>
                <td>kode electronik</td>
                <td>
                    <input type="hidden" name="no_order_020" value="<?php echo $user_data['no_order_020'] ?>">
                    <input type="text" name="kdelektronik_020" value="<?php echo $user_data['kdelektronik_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlahbeli_020" value="<?php echo $user_data['jumlahbeli_020'] ?>"></td>
            </tr>
            <tr>
                <td>harga Beli</td>
                <td><input type="text" name="hargabeli_020" value="<?php echo $user_data['hargabeli_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
