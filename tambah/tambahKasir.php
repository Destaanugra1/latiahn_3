<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actionTambah/tambahKasirAction.php">
        <table>
            <tr>
                <td>Kode Kasir</td>
                <td><input type="text" maxlength="5" name="dbkasir_020"></td>
            </tr>
            <tr>
                <td>Nama Kasir</td>
                <td><input type="text" name="namakasir_020"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_020"></td>
            <tr>
                <td>Nomer Hp</td>
                <td><input type="text" name="notelepon_020"></td>
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