<!DOCTYPE html>
<?php
	include 'connect.php';
	$id = $_GET['p'];
	$query = mysqli_query($connect, "SELECT * FROM lapangan WHERE id_lapangan = '$id'");
	$fetch = mysqli_fetch_array($query);
?>
<body>
<center>
<table border="1" cellspacing="0" cellpadding="4">
	<tr>
		<td><?php echo $fetch['nama_lapangan'] ?></td>
	</tr>
	<tr>
		<td><?php echo $fetch['tipe_lapangan'] ?></td>
	</tr>
	<tr>
		<td><?php echo $fetch['jumlah_lapangan'] ?></td>
	</tr>
	<tr>
		<td><?php echo $fetch['alamat_lapangan'] ?></td>
	</tr>
	<tr>
		<td><?php echo $fetch['harga_lapangan'] ?></td>
	</tr>
</table>
<?php
if(isset($_SESSION['login_user'])){ ?>
<form action="booking.php" method="post" id="booking">
	<input type="hidden" name="id" value='<?php echo $id ?>'>
	Tanggal:<br>
			<select name="tanggal" id="tanggal" form="booking"  required>
			<li>
			<?php
			
				for($i=1;$i<32;$i++){
					echo "<option value='$i'>$i</option>";
				}
			?>
			</li>
			</select><br><br>
			
	Jam:<br>
			<select name="jam" id="jam" form="booking"  required>
			<li>
			<?php
			
				for($i=1;$i<25;$i++){
					echo "<option value='$i'>$i</option>";
				}
			?>
			</li>
			</select><br><br>
			
	Lama Sewa:<br>
			<select name="lamasewa" id="lamasewa" form="booking"  required>
			<li>
			<?php
			
				for($i=1;$i<13;$i++){
					echo "<option value='$i'>$i</option>";
				}
			?>
			</li>
			</select><br><br>
	<input type="submit" value="Booking">
</form>
<?php } ?>
</center>
</body>
