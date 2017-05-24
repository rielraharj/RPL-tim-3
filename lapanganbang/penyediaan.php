<!DOCTYPE HTML>
<?php
	include 'connect.php'; 

	
?>
<html lang="en">
<head>
	<h1>Penyediaan Lapangan</h1>
</head>
<body>
<a href='index.php'>Home</a>
<a href='reglapangan.php'>Daftarkan Lapangan</a>
<br>
<br>
<form action="ubah.php" method="POST">
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#ffffff">
  <td>No</td>
  <td>Nama Lapangan</td>
  <td>Tindakan</td>
 </tr>
  <?php
  $no = 1;
  $penyedia = mysqli_query($connect, "SELECT id_penyedia FROM penyedia_lapangan WHERE id_user='$getuserid'");
  
  $getpenyedia = mysqli_fetch_assoc($penyedia);
  $sedia = $getpenyedia['id_penyedia'];
  $data = mysqli_query($connect, "SELECT * FROM lapangan WHERE id_penyedia='$sedia'") or die (mysqli_error());
       if(mysqli_num_rows($data) == 0){
    echo "<b>Belum ada lapangan terdaftar</b>";
    }else{
      while($hasil = mysqli_fetch_assoc($data)):?>
   
 <tr style="text-align:center">
  <td><?php echo $no?></td>
  <td><?php echo $hasil['nama_lapangan'] ?></td>
  <td>
   <a href="edit.php?id=<?php echo $hasil['id_lapangan'] ?>">Edit</a> ||
   <a href="hapus.php?id=<?php echo $hasil['id_lapangan'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
  </td>
 </tr>
 <?php
 $no++;
  endwhile;
  }
 ?>
</table>
</form>
</body>