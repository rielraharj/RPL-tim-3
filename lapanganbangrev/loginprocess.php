
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['emailuser']) || empty($_POST['pwuser'])) {?>
<script language="javascript">alert("Email atau password Anda salah!"); document.location="login.php";</script>;
<?php
}
else
{
// Define $username and $password
	$email=$_POST['emailuser'];
	$password=$_POST['pwuser'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
	$email = stripslashes($email);
	$password = stripslashes($password);
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);
// Selecting Database
	$db = mysql_select_db("lapanganbang", $connection);
// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from user where password='$password' AND email='$email'", $connection);
	$rows = mysql_num_rows($query);
if ($rows == 1) {
	$_SESSION['login_user']=$email; // Initializing Session
?>
	<script language="javascript">alert("Anda berhasil Login!"); document.location="index.php";</script>;
<?php
	//header("location: index.php"); // Redirecting To Other Page
} else {
?>
	<script language="javascript">alert("Email atau password Anda salah!"); document.location="login.php";</script>;
<?php
}
mysql_close($connection); // Closing Connection
}
}
?>