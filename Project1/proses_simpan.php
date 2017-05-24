<?php
	include "koneksi.php";
		$nama_lapangan=$_POST['nama_lapangan'];
		$alamat_lapangan=$_POST['alamat_lapangan'];
		$harga_lapangan=$_POST['harga_lapangan'];
		$tipe_lapangan=$_POST['tipe_lapangan'];
		//$id = $_POST['id_lapangan']; 
		$sql="INSERT INTO lapangan(id_lapangan, nama_lapangan, alamat_lapangan, harga_lapangan, tipe_lapangan) VALUES ('','$nama_lapangan','$alamat_lapangan','$harga_lapangan','$tipe_lapangan')";
	
		if($conn->multi_query($sql)===true){
			echo "<center>Data Berhasil disimpan</center>";
			header('location: index.php');
		} else {
			echo "<center>Terjadi Kesalahan menyimpan data</center>";
		}
	
	echo "<center>Terjadi Kesalahan menyimpan data</center>";
?>