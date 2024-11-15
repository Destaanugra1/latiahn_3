<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tblcustomer_2359201020 ORDER BY idcastomer_020 DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <a href="../tambah/tambahpelanggan.php">Tambah Data Barang Elektronik</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>Kode Pembeli</th>
      <th>Nama Pembeli</th>
      <th>Alamat</th>
      <th>Nomer Telepon</th>
      
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['idcastomer_020']."</td>";
        echo "<td>".$user_data['namacustemer_020']."</td>";
        echo "<td>".$user_data['alamat_020']."</td>";
        echo "<td>".$user_data['notelepon_020']."</td>";  
        echo "<td><a href='../edit/ubahdatapelanggan.php?idcastomer_020=$user_data[idcastomer_020]'>Edit</a> | <a href='../tambah/actionDelete/deletepelanggan.php?idcastomer_020=$user_data[idcastomer_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>