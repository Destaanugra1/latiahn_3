<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actionTambah/tambahDataElectronik.php">
        <table>
            <tr>
                <td>Kode Elektronik</td>
                <td><input type="text" maxlength="5" name="kdeletronik_020"></td>
            </tr>
            <tr>
                <td>Nama Jenis</td>
                <td><input type="text" name="namaeletronik_020"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td><input type="text" name="jeniseletronik_020"></td>
            <tr>
                <td>harga</td>
                <td><input type="text" name="hargaeletronik_020"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok_020"></td>
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