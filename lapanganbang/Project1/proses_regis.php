<?php
	include "koneksi.php";

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	#$confirmpass = $_POST['password_confirm'];
	#$address = $_POST['alamatuser'];
	#$folder = "img/member";
	#$upload_dir = "../img/member";
	#$photo_size = $_FILES["photomember"]["size"];
	#$photo_loc = $_FILES["photomember"]["tmp_name"];
	#$photo_name = $_FILES["photomember"]["name"];
	
	
		#move_uploaded_file($photo_loc, "$upload_dir/$photo_name");
		$sql_tambah = "INSERT INTO user(id_user,email, password, nama, alamat) 
					  VALUE('','$email','$pass','$nama','$alamat')";
		mysqli_query($conn, $sql_tambah);
?>
		<script language="javascript">alert("Register Successful");</script>
		<script>document.location.href='login.php';</script>
<?php
	
	
?>
		<script language="javascript">alert("Register Failed");</script>
		<script>document.location.href='login.php';</script>
<?php
	
	mysqli_close($conn);
?>