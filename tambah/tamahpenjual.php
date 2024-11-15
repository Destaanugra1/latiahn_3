<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actionTambah/tambahpenjual.php">
        <table>
            <tr>
                <td>No order</td>
                <td><input type="text" maxlength="5" name="no_order_020"></td>
            </tr>
            <tr>
                <td>Order</td>
                <td><input type="text" name="tbl_order_020"></td>
            </tr>
            <tr>
                <td>id coastumer</td>
                <td><input type="text" name="idcustemer_020"></td>
            <tr>
                <td>Unag Muka</td>
                <td><input type="text" name="uang_muka_020"></td>
            </tr>
            <tr>
                <td>Id Kasir</td>
                <td><input type="text" name="idkasir_020"></td>
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