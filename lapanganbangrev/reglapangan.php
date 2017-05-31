	<!DOCTYPE HTML>
<?php
  include 'connect.php';  
  $penyedia = mysqli_query($connect, "SELECT id_penyedia FROM penyedia_lapangan WHERE id_user='$getuserid'");
  $getpenyedia = mysqli_fetch_assoc($penyedia);
  $sedia = $getpenyedia['id_penyedia'];
  if($sedia==null){
		$sql_addsedia = "INSERT INTO penyedia_lapangan(id_penyedia,id_user) 
					   VALUES ('','$getuserid')";
		mysqli_query($connect,$sql_addsedia);
		$penyedia = mysqli_query($connect, "SELECT id_penyedia FROM penyedia_lapangan WHERE id_user='$getuserid'");
		$getpenyedia = mysqli_fetch_assoc($penyedia);
		$sedia = $getpenyedia['id_penyedia'];
  }
?>

<html lang="en">
<head>
	<center><h1>Register Lapangan</h1></center>
	<center>	
		<form action="reglapprocess.php" method="post" id="reglapang">
			<input type="hidden" name="iduser" id="iduser" value="<?php echo $sedia ?>">
			
			Nama Lapangan:<br>
			<input type="text" name="namalapang" id="namalapang" required><br><br>
			
			Tipe Lapangan:<br>
			<select name="tipelapang" id="tipelapang" form="reglapang" required>
				<li><option value="futsal">Futsal</option>
				<option value="basket">Basket</option>
				<option value="voli">Voli</option>
				<option value="sepakbola">Sepakbola</option>
				<option value="badminton">Badminton</option></li>
			</select><br><br>
			
			
			Alamat Lapangan:<br>
			<input type="text" name="alamatlap" id="alamatlap"  required>
				
			<br><br>
			
			Harga Lapangan:<br>
			Rp.<input type="text" name="hrglapang" id="hrglapang" minlength="5" maxlength="6" required>/jam<br><br>
		
			<input type="submit" value="Submit">
		</form>
		
		
		
	</center>
</head>
<body>
	<form>
</body>