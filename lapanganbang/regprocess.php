<!DOCTYPE HTML>
<?php
	include "connect.php";
	
	$email = $_POST['emailuser'];
	$password = $_POST['pwuser'];
	$name = $_POST['name'];
?>
<html>
<head>Process</head>
<body>
	<?php
		if($_POST['pwuser']==$_POST['verpwuser']){
		$sql_tambah = "INSERT INTO user(id_user, nama, email, password) 
					   VALUES ('','$name', '$email', '$password')";
		mysqli_query($connect,$sql_tambah);
		echo "regis berhasil";
		}else {
			echo "regis gagal";
		}
	?>
	<a href="index.php">Home</a>
	<a href="login.php">Login</a>
	<?php
		mysqli_close($connect);
	
	
	?>
</body>
</html>