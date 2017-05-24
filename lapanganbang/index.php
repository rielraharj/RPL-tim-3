	<!DOCTYPE HTML>
<?php
	include 'connect.php'; 

	
?>
<html lang="en">
<head>
	<h1>Index</h1>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="4">
	<tr style="text-align:center;background-color:#ffffff">
	
		<?php
			if(isset($_SESSION['login_user'])){
				
				echo "<td>$login_session</td>";
				echo "<td><a href='logout.php'>Logout</a></td>";
				echo "<td><a href='penyediaan.php'>Penyediaan</a></td>";
			}else{
				echo "<td>";
				echo "<a href='register.php'>Register</a>";
				echo "</td><td>";
				echo "<a href='login.php'>Login</a>	";
				echo "</td>";
			}
		?>
	</tr>
</table>
</body>