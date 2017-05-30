
<title>
	List lapangan
</title>

<?php
	include 'koneksi.php';
	$ambil = "SELECT * FROM lapangan ";
	$query1 = mysqli_query($conn, $ambil);

?>

			<div class="container center">
				<h2>List Lapangan</h2>
			</div>
			<div class="container">
			<div class="row">
			<?php
				$count = 1;
				while($result1 = mysqli_fetch_array($query1)){?>
				<div class="col s4">
				  	<div class="card medium">
						<div class="card-image waves-effect waves-block waves-light">
					  		<img class = "activator" src = "<?php echo $result1['gambar'] ?>"/>
						</div>
					<div class="card-content">
						<p class="card-title activator grey-text text-darken-4">
								<?php echo $result1['nama_lapangan']?><i class="material-icons right"></i></p>
					</div>
					<div class="card-reveal">
					  	<span class="card-title grey-text text-darken-4"><?php echo $result1['nama_lapangan'] ?><i class="material-icons right">close</i></span>
					  	<p><?php echo $result1['keterangan'] ?></p>
					  	<span class="card-title activator grey-text text-darken-4"><strong>Rp.<?php echo $result1['harga_lapangan']?></strong><i class="material-icons right"></i></span>
							<p> <a class="waves effect waves-light btn cyan" href="detailproduk.php?id_barang=<?php echo $result1['id_lapangan']?>">Edit<i class="material-icons">shopping_cart</i></a></p>
					</div>
					</div>
            	</div>
				<?php }
			?>
