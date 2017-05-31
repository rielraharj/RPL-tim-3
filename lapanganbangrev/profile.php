<?php
	include "connect.php";
	$namauser=$row['nama'];
	$emailuser=$row['email'];
	
?>

<html>
<body>
	Nama Lengkap :<?php echo $namauser; ?>
</body>
</html>