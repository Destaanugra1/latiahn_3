<?php  

include_once('koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tblelectronik_2359201020 ORDER BY kdeletronik_020 DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <a href="tambahdatabarangelektronik.php">Tambah Data Barang Elektronik</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>Kode Elektronik</th>
      <th>Nama Elektronik</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kdeletronik_020']."</td>";
        echo "<td>".$user_data['namaeletronik_020']."</td>";
        echo "<td>".$user_data['jeniseletronik_020']."</td>";
        echo "<td>".$user_data['hargaeletronik_020']."</td>";  
        echo "<td>".$user_data['stok_020']."</td>";  
        echo "<td><a href='editdatabarangelektronik.php?kdeletronik_020=$user_data[kdeletronik_020]'>Edit</a> | <a href='deletedatabarangelektronik.php?kdeletronik_020=$user_data[kdeletronik_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="index.php">Kembali ke menu utama</a>
</body>
</html>