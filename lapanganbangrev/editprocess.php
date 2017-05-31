<?php
include 'connect.php';
if(!isset($_SESSION['login_user'])){
		header("Location: index.php");
}else{
  if(isset($_POST['edit'])){
  $id     = $_POST['id'];
  $nama    = $_POST['nama'];
  $tipelapangan = $_POST['tipelapang'];
	$jmllapangan = $_POST['jmllapang'];
	$almlapangan = $_POST['alamatlap'];
	$hrglapangan = $_POST['hrglapang'];
	
   $queryupdate = mysqli_query($connect, "UPDATE lapangan SET nama_lapangan = '$nama',
		tipe_lapangan='$tipelapangan',
		jumlah_lapangan='$jmllapangan',
		alamat_lapangan='$almlapangan',
		harga_lapangan='$hrglapangan' WHERE id_lapangan = $id");
   
   if($queryupdate){
   header('location: penyediaan.php');
  }else{
   echo "Upss Something wrong..";
  }
  }
}
   ?>