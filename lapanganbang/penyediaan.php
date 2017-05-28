<!DOCTYPE HTML>
<?php
	include 'connect.php'; 
	if(!isset($_SESSION['login_user']))
		header("Location: index.php");
	
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

<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#ffffff">
  <td>No</td>
  <td>Nama Lapangan</td>
  <td>Tipe Lapangan</td>
  <td>Jumlah Lapangan</td>
  <td>Harga per jam</td>
  <td>Alamat</td>
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
  <td><?php echo $hasil['tipe_lapangan'] ?></td>
  <td><?php echo $hasil['jumlah_lapangan'] ?></td>
  <td><?php echo $hasil['harga_lapangan'] ?></td>
  <td><?php echo $hasil['alamat_lapangan'] ?></td>
  <td>
	<form action="edit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $hasil['id_lapangan']?>">
		<input type="submit" name="edit" value="Edit">
	</form>||
   <a href="remove.php?id=<?php echo $hasil['id_lapangan'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
  </td>
 </tr>
 <?php
 $no++;
  endwhile;
  }
 ?>
</table>

</body>