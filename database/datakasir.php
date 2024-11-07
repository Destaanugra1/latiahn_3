<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tblkasir_2359201020 ORDER BY dbkasir_020 DESC");
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
      <th>Kode Kasir</th>
      <th>Nama Kasir</th>
      <th>alamat kasir</th>
      <th>No telephone</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['dbkasir_020']."</td>";
        echo "<td>".$user_data['namakasir_020']."</td>";
        echo "<td>".$user_data['alamat_020']."</td>";
        echo "<td>".$user_data['notelepon_020']."</td>";    
        echo "<td><a href='../edit/ubahdatakasir.php?dbkasir_020=$user_data[dbkasir_020]'>Edit</a> | <a href='deletedatabarangelektronik.php?dbkasir_020=$user_data[dbkasir_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>