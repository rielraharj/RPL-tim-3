<!DOCTYPE HTML>
<?php
	include "connect.php";
	
	$email = $_POST['emailuser'];
	$password = $_POST['pwuser'];
	$name = $_POST['name'];
	$alamat = $_POST['alamat'];
?>
<html>
<head>Process</head>
<body>
	<?php
		if($_POST['pwuser']==$_POST['verpwuser']){
		$sql_tambah = "INSERT INTO user(id_user, nama, email, password, alamat) 
					   VALUES ('','$name', '$email', '$password', '$alamat')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Register Successful");</script>
		<script>document.location.href='index.php';</script>
	<?php
		}else {
	?>
		<script language="javascript">alert("Register Failed");</script>
		<script>document.location.href='index.php';</script>
	<?php
		}
	?>
	
	<?php
		mysqli_close($connect);
	
	
	?>
</body>
</html>