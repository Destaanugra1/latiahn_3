<!DOCTYPE html>
<html>
<head>
    <title>Ubah data elctronik</title>
</head>
<body>
    <h3>UBAH data electronik</h3>
    <?php
    include "../koneksi.php";
    $kdeletronik_020 = $_GET['kdeletronik_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tblelectronik_2359201020 WHERE kdeletronik_020='$kdeletronik_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updateelktronik.php" method="post">
        <table>
            <tr>
                <td>Nama Electronik</td>
                <td>
                    <input type="hidden" name="kdeletronik_020" value="<?php echo $user_data['kdeletronik_020'] ?>">
                    <input type="text" name="namaeletronik_020" value="<?php echo $user_data['namaeletronik_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td><input type="text" name="jeniseletronik_020" value="<?php echo $user_data['jeniseletronik_020'] ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="hargaeletronik_020" value="<?php echo $user_data['hargaeletronik_020'] ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok_020" value="<?php echo $user_data['stok_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
