	<!DOCTYPE HTML>
<?php
	include 'connect.php'; 

	
?>
<html lang="en">
<head>
	<h1>Index</h1>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="4">
	<tr style="text-align:center;background-color:#ffffff">
	
		<?php
			if(isset($_SESSION['login_user'])){
				
				echo "<td><a href='profile.php'>$login_session</a></td>";
				echo "<td><a href='logout.php'>Logout</a></td>";
				echo "<td><a href='penyediaan.php'>Penyediaan</a></td>";
			}else{
				
				echo "<td><a href='register.php'>Register</a></td>";
				
				echo "<td><a href='login.php'>Login</a></td>";
				
			}
		?>
	</tr>
</table>


<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#ffffff">
  <td>No</td>
  <td>Nama Lapangan</td>
  <td>Tipe Lapangan</td>
  <td>Jumlah Lapangan</td>
  <td>Harga per jam</td>
  <td>Alamat</td>
  
 </tr>
  <?php
  $no = 1;
 
  $data = mysqli_query($connect, "SELECT * FROM lapangan") or die (mysqli_error());
       if(mysqli_num_rows($data) == 0){
    echo "<b>Belum ada lapangan terdaftar</b>";
    }else{
      while($hasil = mysqli_fetch_assoc($data)):?>
   
 <tr style="text-align:center">
  <td><?php echo $no?></td>
  <td><a href='lapangan.php?p=<?php echo $hasil['id_lapangan'] ?>'><?php echo $hasil['nama_lapangan'] ?></a></td>
  <td><?php echo $hasil['tipe_lapangan'] ?></td>
  <td><?php echo $hasil['jumlah_lapangan'] ?></td>
  <td><?php echo $hasil['harga_lapangan'] ?></td>
  <td><?php echo $hasil['alamat_lapangan'] ?></td>
  
 </tr>
 <?php
 $no++;
  endwhile;
  }
 ?>
</table>
</body>