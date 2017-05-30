<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 // if($aksi == "tambah"){
 // 	$db->input($_POST['nama'],$_POST['alamat'],$_POST['usia'],$_POST['email']);
 // 	header("location:member.php");
 // }elseif($aksi == "hapus"){ 	
 // 	$db->hapus($_GET['id']);
	// header("location:member.php");
 // }else
if($aksi == "update"){
 	$db->update($_POST['id_user'],$_POST['nama'],$_POST['alamat_lapangan'],$_POST['tipe_lapangan'],$_POST['harga_lapangan']);
 	header("location:member.php");
 }
?>


