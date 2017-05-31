<?php
	include "connect.php";
	$idsewa = $_POST['id'];
	$value	= $_POST['nilai'];
	
	$queryupdate = mysqli_query($connect,"UPDATE penyewaan SET status='$value' WHERE id_penyewaan ='$idsewa'");
	
	if($queryupdate){
		header('location:status.php');
	}
?>
