<?php 
include 'koneksi.php';
if(empty($_SESSION['id_user'])) {
	header("location:login.php");
} else if($_SESSION['id_user']){
	$id_user = $_SESSION['id_user'];
}

	$nama_lapangan = $_POST['nama_lapangan'];
	$alamat_lapangan = $_POST['alamat_lapangan'];
	$tipe_lapangan = $_POST['tipe_lapangan'];
	$harga_lapangan = $_POST['harga_lapangan'];
	//$ket = $_POST['keterangan'];
	
	#$pict = $_POST['gambar'];

	$foto_size = $_FILES['image']['size'];
	$foto_loc = $_FILES['image']['tmp_name'];
	$foto_name = $_FILES['image']['name'];
	$upload_dir = "image/gambar_lapangan/".$foto_name;
	#$format=pathinfo($foto_name,PATHINFO_EXTENSION);

	if($foto_size < 1000000){
		#move_uploaded_file($foto_loc,"image/gambarbarang".$foto_name);
		move_uploaded_file($foto_loc, $upload_dir);
		$jalan = mysqli_query($conn, "INSERT INTO lapangan(id_lapangan,nama_lapangan,alamat_lapangan,harga_lapangan,tipe_lapangan, gambar, id_user) VALUE('','$nama_lapangan','$alamat_lapangan','$harga_lapangan','$tipe_lapangan','image/$foto_name', '$id_user')");
	if($jalan){
?>
	<script language="javascript">alert("Lapangan Berhasil Ditambahkan");</script>
	<script>document.location.href='member.php';</script>
<?php } 
	else{
?>
	<script language="javascript">alert("Lapangan Gagal Ditambahkan");</script>
	<script>document.location.href='member.php';</script>
<?php }
}
?>
