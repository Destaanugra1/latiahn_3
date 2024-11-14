<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tabel_admin_2359201020 ORDER BY id_admin_020  DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <a href="../tambah/tambahDataElcetronik.php">Tambah Data Barang Elektronik</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>id admin</th>
      <th>Nama Admin</th>
      <th>gender</th>
      <th>alamat</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_admin_020']."</td>";
        echo "<td>".$user_data['nama_admin_020']."</td>";
        echo "<td>".$user_data['gender_admin_020']."</td>";
        echo "<td>".$user_data['alamat_020']."</td>";  
        echo "<td><a href='../edit/ubahdataelctronik.php?id_admin_020 =$user_data[id_admin_020]'>Edit</a> | <a href='../tambah/actionDelete/deleteadmin.php'?id_admin_020 =$user_data[id_admin_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>