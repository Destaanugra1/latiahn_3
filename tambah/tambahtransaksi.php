<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actionTambah/tambahtransaksi.php">
        <table>
            <tr>
                <td>No order</td>
                <td><input type="text" maxlength="5" name="dbkasir_020"></td>
            </tr>
            <tr>
                <td>Kode eltronik</td>
                <td><input type="text" name="kdelektronik_020"></td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td><input type="text" name="jumlahbeli_020"></td>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="hargabeli_020"></td>
            </tr>
            <tr>
                <td>Update</td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="dataelektronik.php">Kembali</a>
</body>
</html>