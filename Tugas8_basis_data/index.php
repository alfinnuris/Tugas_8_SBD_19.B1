<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data_8</title>
</head>
<body>
   <div class="container">
      <center><h1>Sistem Penginapan</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM kamar';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel kamar</h3>
         <table>
          <tr>
            <th>kode_kamar</th>
            <th>Jenis_kamar</th>
            <th>Tarif</th>

         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['kode_kamar'];?></td>
               <td><?= $row['jenis_kamar'];?></td>
               <td><?= $row['tarif'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM tamu_hotel';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>tamu_hotel</h3>
         <table>
          <tr>
            <th>id_penghuni</th>
            <th>nama_penghuni</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_penghuni'];?></td>
               <td><?= $row['nama_penghuni'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM registrasi';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel registrasi</h3>
         <table>
          <tr>
            <th>no_registrasi</th>
            <th>tanggal_daftar</th>
            <th>lama_menginap</th>
            <th>tarif</th>
            <th>total_tarif</th>
            <th>kode_kamar</th>
            <th>id_penghuni</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['no_registrasi'];?></td>
               <td><?= $row['tanggal_daftar'];?></td>
               <td><?= $row['lama_menginap'];?></td>
               <td><?= $row['tarif'];?></td>
               <td><?= $row['total_tarif'];?></td>
               <td><?= $row['kode_kamar'];?></td>
               <td><?= $row['id_penghuni'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
        
      </div>
   </div>
</body>
</html>
</html>