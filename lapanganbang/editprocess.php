<?php
include 'connect.php';
  if(isset($_POST['edit'])){
  $id     = $_POST['id'];
  $nama    = $_POST['nama'];
  
   $queryupdate = mysqli_query($connect, "UPDATE lapangan SET nama_lapangan = '$nama' WHERE id_lapangan = $id");
   if($queryupdate){
   header('location: penyediaan.php');
  }else{
   echo "Upss Something wrong..";
  }
  }
   ?>