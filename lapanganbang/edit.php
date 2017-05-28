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
   $id = $_POST['id']; 
   $data = mysqli_query($connect, "SELECT * FROM lapangan WHERE id_lapangan = '$id'");
   $hasil = mysqli_fetch_array($data);
   ?>

    <form action="editprocess.php" method="POST" id="edit">
   <table>
   
   <tr>
    <td>Nama <br>
    <input type="text" name="nama" value="<?php echo $hasil['nama_lapangan'] ?>" required>
    <input type="hidden" name="id" value="<?php echo $id?>"></td>
   </tr> 
	<tr>
	<td>
		Tipe Lapangan:<br>
			<select name="tipelapang" id="tipelapang" form="edit"  required>
				<li><option value="futsal">Futsal</option>
				<option value="basket">Basket</option>
				<option value="voli">Voli</option>
				<option value="sepakbola">Sepakbola</option>
				<option value="badminton">Badminton</option></li>
			</select><br><br>
	</td>
	</tr>
	<tr>
	<td>
		Jumlah Lapangan:<br>
			<input type="number" name="jmllapang" id="jmllapang" value="<?php echo $hasil['jumlah_lapangan'] ?>" required><br><br>
	</td>
	</tr>
	
	<tr>
	<td>
	Alamat Lapangan:<br>
			<input type="text" name="alamatlap" id="alamatlap" value="<?php echo $hasil['alamat_lapangan'] ?>">
			
	</td>
	</tr>
	<tr>
	<td>
		
			Harga Lapangan:<br>
			Rp.<input type="text" name="hrglapang" id="hrglapang" value="<?php echo $hasil['harga_lapangan'] ?>" required>/jam<br><br>
		
	</td>
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