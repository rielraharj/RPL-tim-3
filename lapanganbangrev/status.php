<?php
	include"connect.php";
	if(!isset($_SESSION['login_user']))
		header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<body>
<a href='index.php'>Home</a>
<h1>Booking Masuk</h1>
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#ffffff">
  <td>No</td>
  <td>Nama Penyewa</td>
  <td>Nama Lapangan</td>
  <td>Tanggal sewa</td>
  <td>Bulan sewa</td>
  <td>Jam sewa</td>
  <td>Lama sewa</td>
  <td>Tindakan</td>
 </tr>
  <?php
  $no = 1;
  $penyedia = mysqli_query($connect, "SELECT id_penyedia FROM penyedia_lapangan WHERE id_user='$getuserid'");
  
  $getpenyedia = mysqli_fetch_assoc($penyedia);
  $sedia = $getpenyedia['id_penyedia'];
  $data = mysqli_query($connect, "SELECT id_lapangan FROM lapangan WHERE id_penyedia='$sedia'") or die (mysqli_error());
       if(mysqli_num_rows($data) != 0){
   
   
      while($hasil = mysqli_fetch_assoc($data)){
			$idlap=$hasil['id_lapangan'];
			$penyewaan= mysqli_query($connect,"SELECT * FROM penyewaan WHERE id_lapangan='$idlap'");
			if(mysqli_num_rows($penyewaan)!=0){
				while($datasewa=mysqli_fetch_assoc($penyewaan)){
		  
	?>
		
 <tr style="text-align:center">
  <td><?php echo $no?></td>
	<?php
	$iduser=$datasewa['id_user'];
	$querynama=mysqli_query($connect,"SELECT nama FROM user WHERE id_user='$iduser'");
	$nama=mysqli_fetch_assoc($querynama);
	?>
  <td><?php echo $nama['nama'] ?></td>
	<?php
	$idlap=$datasewa['id_lapangan'];
	$querynamalap=mysqli_query($connect,"SELECT nama_lapangan FROM lapangan WHERE id_lapangan='$idlap'")or die (mysqli_error());
	$namalap=mysqli_fetch_assoc($querynamalap);
	?>
  <td><?php echo $namalap['nama_lapangan'] ?></td>
  <td><?php echo $datasewa['tgl_sewa'] ?></td>
  <td><?php echo $datasewa['bln_sewa'] ?></td>
  <td><?php echo $datasewa['jam_sewa'] ?></td>
  <td><?php echo $datasewa['lama_sewa'] ?></td>
  <td>
  <?php
	if($datasewa['status']==NULL){
  ?>
	<form action="request.php" method="post">
		<input type="hidden" name="id" value="<?php echo $datasewa['id_penyewaan']?>">
		<input type="hidden" name="nilai" value="1">
		<input type="submit" name="accept" value="Accept">
	</form>
	<form action="request.php" method="post">
		<input type="hidden" name="id" value="<?php echo $datasewa['id_penyewaan']?>">
		<input type="hidden" name="nilai" value="0">
		<input type="submit" name="decline" value="Decline">
	</form>
	<?php	}else{
		if($datasewa['status']==0)
			echo "Declined";
		else echo "Accepted";
	}	
	?>
  </td>
 </tr>
 <?php
 $no++;
				}
			}
	   }
  }
 ?>
</table>


<h1>Booking Keluar</h1>
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#ffffff">
  <td>No</td>
  <td>Nama Lapangan</td>
  <td>Tanggal sewa</td>
  <td>Bulan sewa</td>
  <td>Jam sewa</td>
  <td>Lama sewa</td>
  <td>Status</td>
 </tr>
  <?php
  $no = 1;
  $querysewa = mysqli_query($connect, "SELECT * FROM penyewaan WHERE id_user='$getuserid'");
  
       if(mysqli_num_rows($querysewa) != 0){
			while($getquerysewa= mysqli_fetch_assoc($querysewa)){
		  
	?>
		
 <tr style="text-align:center">
  <td><?php echo $no?></td>
	<?php
	$idlapsewa=$getquerysewa['id_lapangan'];
	$querynamalapsewa=mysqli_query($connect,"SELECT nama_lapangan FROM lapangan WHERE id_lapangan='$idlapsewa'");
	$namalapsewa=mysqli_fetch_assoc($querynamalapsewa);
	?>
  <td><?php echo $namalapsewa['nama_lapangan'] ?></td>
  <td><?php echo $getquerysewa['tgl_sewa'] ?></td>
  <td><?php echo $getquerysewa['bln_sewa'] ?></td>
  <td><?php echo $getquerysewa['jam_sewa'] ?></td>
  <td><?php echo $getquerysewa['lama_sewa'] ?></td>
  <td><?php if($getquerysewa['status']==NULL)
			echo "Pending";
	else if($getquerysewa['status']==0)
			echo "Declined";
		else echo "Accepted";
	?>
	
</td>
 </tr>
 <?php
 $no++;
	}
}

 ?>
</table>
</body>


</body>
</html>