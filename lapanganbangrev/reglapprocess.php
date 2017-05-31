<!DOCTYPE HTML>
<?php
	include "connect.php";
	
	$idpenyedia = $_POST['iduser'];
	$namalapangan = $_POST['namalapang'];
	$tipelapangan = $_POST['tipelapang'];
	
	$almlapangan = $_POST['alamatlap'];
	$hrglapangan = $_POST['hrglapang'];
?>
<html>
<head>Process</head>
<body>
	<?php
		
		$sql_tambah = "INSERT INTO lapangan(id_lapangan, id_penyedia, nama_lapangan, alamat_lapangan , harga_lapangan,tipe_lapangan) 
					   VALUES ('','$idpenyedia', '$namalapangan', '$almlapangan', '$hrglapangan', '$tipelapangan' )";
		mysqli_query($connect,$sql_tambah);
		echo "pendaftaran lapangan berhasil";
		
	?>
	<a href="index.php">Home</a>
	<a href="penyediaan.php">daftar lapangan</a>
	<?php
		mysqli_close($connect);
	
	
	?>
</body>
</html>