	<!DOCTYPE HTML>
<?php
  include '../koneksi.php';  
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
			<div class="row">
    			<form class="col s12">
      				<div class="row">
        				<div class="input-field col s6">
				          <input id="first_name" type="text" class="validate">
				          	<label for="last_name">First Name</label>
     					</div>
     				</div>
     			</form>
     		</div>		

			<input type="text" name="name" id="name" required><br><br>
		
			<input type="submit" value="Submit">
		</form>
	</center>
</head>
<body>


</body>