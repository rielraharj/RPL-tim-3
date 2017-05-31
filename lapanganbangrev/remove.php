<?php
include('connect.php');
  $id = $_POST['id'];
  $data = mysqli_query($connect, "DELETE FROM lapangan WHERE id_lapangan = $id");
  if($data){
  header('location: penyediaan.php');
 }else{
  echo "Upss Something wrong..";
 }
?>