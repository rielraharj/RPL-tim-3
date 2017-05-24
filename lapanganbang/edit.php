<!DOCTYPE html>
 <html>
 <head>
  <title>EDIT DATA</title>

 </head>
 <body>
 <a href="index.php" class="menu">Home</a> ||
 <a href="penyediaan.php" class="menu">Penyediaan Lapangan</a>
  <h1>EDIT DATA</h1>

   <?php
  include "connect.php";
   $id = $_GET['id']; 
   $data = mysqli_query($connect, "SELECT * FROM lapangan WHERE id_lapangan = '$id'");
   $hasil = mysqli_fetch_array($data);
   ?>

    <form action="editprocess.php" method="POST">
   <table>
   
   <tr>
    <td>Nama </td>
    <td><input type="text" name="nama" value="<?php echo $hasil['nama_lapangan'] ?>"></td>
    <td><input type="hidden" name="id" value="<?php echo $id?>"</td>
   </tr>     
    <tr>
    <td></td>
      <td><input type="submit" name="edit" value="Edit">
    <button type="reset" value="Reset">Reset</button>
     </td>
    </tr>
    </table>
 </form>
 </body>
 </html>