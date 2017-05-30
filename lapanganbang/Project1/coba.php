
<?php 

	$conn = new mysqli('localhost','root','','penyewaan_lapangan');
	//$sell = mysqli_select_db($db);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$nama_lapangan="heis";
		$alamat_lapangan="jl pajajaran";
		$harga_lapangan=55000;
		$tipe_lapangan="ayam";
		//$id = $_POST['id_lapangan']; 

		if($conn->multi_query("INSERT INTO lapangan(id_lapangan, id_penyedia, nama_lapangan, alamat_lapangan, harga_lapangan, tipe_lapangan) VALUES ('','','$nama_lapangan','$alamat_lapangan','$harga_lapangan','$tipe_lapangan')")===true){
			echo " berhsil ";
		}else {
			echo "gagal";
		}


		echo "hei";
		

?>


