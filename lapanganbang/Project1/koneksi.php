
<?php 
	session_start();
	
	$host = "localhost";
	$uname = "root";
	$pass = "";
	$db = "penyewaan_lapangan";

	$conn = mysqli_connect($host,$uname,$pass,$db) or die ("Gagal koneksi ke server".mysqli_error());
	//$sell = mysqli_select_db($db);
	$connection = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("penyewaan_lapangan", $connection);
	
	if(isset($_SESSION['id_user'])){
		$user_check=$_SESSION['id_user'];
		$ses_sql=mysql_query("SELECT * from user where email='$user_check'", $connection);
		$row = mysql_fetch_array($ses_sql);
		$login_session =$row['nama'];
		$getuserid = $row['id_user'];
		}
		if(!isset($login_session)){
		mysql_close($connection); // Closing Connection
		 // Redirecting To Home Page
	}
?>
