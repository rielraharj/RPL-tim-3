	<!DOCTYPE HTML>
<?php
  include 'connect.php';  
?>
<html lang="en">
<head>
	<center><h1>Register</h1></center>
	<center>	
		<form action="./regprocess.php" method="post">
			E-mail:<br>
			<input type="email" name="emailuser" id="emailuser" required><br><br>
			Password:<br>
			<input type="password" name="pwuser" id="pwuser" required><br><br>
			Password Verification:<br>
			<input type="password" name="verpwuser" id="verpwuser" required><br><br>
			Full Name:<br>
			<input type="text" name="name" id="name" required><br><br>
		
			<input type="submit" value="Submit">
		</form>
	</center>
</head>
<body>
	<form>
</body>