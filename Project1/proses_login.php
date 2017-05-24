<?php //session_start();
//require_once("koneksi.php");
//$username = $_POST['username'];
//$pass = $_POST['password'];
//$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
//$jumlah = mysql_num_rows($cekuser);
//$hasil = mysql_fetch_array($cekuser);
//if($jumlah == 0) {
//echo "Username Belum Terdaftar!";
//echo "<a href="login.php">? Back</a>";
//} else {
//if($pass <=> $hasil['password']) {
//echo "Password Salah!
//";
//echo "<a href="login.php">&amp;amp;laquo; Back</a>";
//} else {
//$_SESSION['username'] = $hasil['username'];
//header('location:index.php');
//}
//}
?>
<?php 
	include 'koneksi.php';
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE email = '$email'";
	$process = mysqli_query($conn, $sql);
	//$process = $conn->multi_query($sql);
	//echo $process;
	$jumlah = mysqli_num_rows($process);
	$hasil = mysqli_fetch_array($process);

	if($jumlah == 0) {
	echo "Akun belum terdaftar!";
	//header('location:login.php');
	} else {
		if($password != $hasil['password']) {
		echo "Email atau Password Salah!";
		} else {
		$_SESSION['id_user'] = $hasil['id_user'];
		header('location:index.php');
		}
	}
	?>
