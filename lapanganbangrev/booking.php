<!DOCTYPE HTML>
<?php
	include "connect.php";
	
	$idlap = $_POST['id'];
	$tglsewa = $_POST['tanggal'];
	$jamsewa = $_POST['jam'];
	$lamasewa = $_POST['lamasewa'];
	$bulan= date('m');
	$tanggal=date('d');
	if($tglsewa<$tanggal)$bulan=$bulan+1;
?>
<html>
<head>Process</head>
<body>
	<?php
		
		$sql_tambah = "INSERT INTO penyewaan(id_penyewaan, id_user, id_lapangan, tgl_sewa , bln_sewa,jam_sewa, lama_sewa) 
					   VALUES ('','$getuserid', '$idlap', '$tglsewa', '$bulan', '$jamsewa', '$lamasewa' )";
		mysqli_query($connect,$sql_tambah);
		echo "penyewaan lapangan berhasil";
		
	?>
	<a href="index.php">Home</a>
	<a href="penyediaan.php">daftar lapangan</a>
	<?php
		mysqli_close($connect);
	
	
	?>
</body>
</html>