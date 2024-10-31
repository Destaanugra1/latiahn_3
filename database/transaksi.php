<?php  
include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tabel_detailtransaksi_235920120 ORDER BY no_order_020 DESC");
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
      <th>No Order</th>
      <th>Order Table</th>
      <th>Customer ID</th>
      <th>Down Payment</th>
      <th>Cashier ID</th>
      <th>Actions</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['no_order_020']."</td>";
        echo "<td>".$user_data['kdelektronik_020']."</td>";
        echo "<td>".$user_data['jumlahbeli_020']."</td>";
        echo "<td>".$user_data['hargabeli_020']."</td>";  
        echo "<td><a href='editdatabarangelektronik.php?no_order_020=$user_data[no_order_020]'>Edit</a> | <a href='deletedatabarangelektronik.php?no_order_020=$user_data[no_order_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>