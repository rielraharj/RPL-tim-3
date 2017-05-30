<!DOCTYPE html>
<?php
	include 'modul/connect.php';
	if($_SESSION['status'] != "nouser"){
	    	$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM memberyasmin WHERE idMember = '$id'");
		$result = mysqli_fetch_array($query);
	}
?>
<?php
$data=0;
?>
<?php
if(isset($_SESSION['cart_items']))
$data+=(count($_SESSION['cart_items']))?>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.collapsible').collapsible({
                    accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
                });
            });
        </script>
        <?php
    if(isset($_SESSION['user'])){
    $id_customer = $_SESSION['idcust'];
    $pembelis=mysqli_query($conn,"Select * from memberyasmin WHERE idMember='$id'");
    $pembeli=mysqli_fetch_array($pembelis);
    $iduser=$pembeli['idMember'];}?>

<html lang ="en">
	<head>

		<nav>
		  <div class="nav-wrapper">
		  	<ul class="left">
		  		<?php if($_SESSION['status'] != "Admin") {?>
					<li><a href="index.php">YasminTech</a></li>
					<li><a href='keranjang.php'><i class='material-icons'>shopping_cart</i></a></li>
			 		<li align="center">
                    	<?php if($data>0) echo $data; else echo 0;?>
                	</li>
                <?php } 
                
                ?>

			</ul>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				
				<?php
					if($_SESSION['status'] != "nouser"){
						if($_SESSION['status'] == 'Admin'){
				?>
							<li><a class="dropdown-button" href="dashboardadmin.php" data-activates='dropdown1'><?php echo $result['namaMember']?></a></li>
							<li><a class="dropdown-button" href="modul/modullogout.php" data-activates='dropdown1'>Logout</a></li>
							
				<?php
						}
						else{
				?>
							<li><a class="dropdown-button" href="#" data-activates='dropdown1'><?php echo $result['namaMember']?></a></li>
							<li><a class="dropdown-button" href="modul/modullogout.php" data-activates='dropdown1'>Logout</a></li>
							<li><a href="formpinjam.php" class="waves-effect waves-light btn slidebutton">Start Booking</a></li>
				<?php
						}
					}
					else{
				?>
					<div calss="modal-footer">
						<li><a calss="modal-action modal-close waves-effect waves-green btn-flat" href="login.php">Login/Register</a></li>
						<li><a href="formpinjam.php" class="waves-effect waves-light btn slidebutton">Start Booking</a></li>
					</div>
					<?php
						}
					?>
			 	
			</ul>
			
		  </div>
		</nav>

		<!--Import CSS-->
		<link rel="stylesheet" href="font-awesome.css">
		<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/icon.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- Import Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>

		<!-- Import JavaScript -->
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.js"></script>



			  <!-- Dropdown Structure -->
