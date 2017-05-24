
<?php
include('loginprocess.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Login</h1>
<div id="login">
<center>
<h2>Login Form</h2>
<form action="" method="post">
<label>E-mail :</label><br>
<input id="emailuser" name="emailuser" placeholder="E-mail" type="email"><br><br>
<label>Password :</label><br>
<input id="pwuser" name="pwuser" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</center>
</div>
</div>
</body>
</html>