<?php 
include 'koneksi.php';
//$db = "penyewaan_lapangan";

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Hakko Bio Richard" />
	<title>LAPANGANBANG!</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!--Import CSS-->
    <link rel="stylesheet" href="font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/icon.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <style type="text/css">
        .slider {
          width: 900px;
          margin: 0 auto;
        }
        .slider .indicators {
          bottom: 60px;
          z-index: 100;
          /* text-align: left; */
        }

        .slider .indicators .indicator-item {
          background-color: #666666;
          border: 3px solid #ffffff;
          -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0 .16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
          -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }
        .slider .indicators .indicator-item.active {
          background-color: #ffffff;
        }

    </style>
    <!-- Import Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>

    <!-- Import JavaScript -->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('.slider').slider();
      });
    </script>
</head>
<body>
<div class="container">
<div class="col s12">
<nav>
    <div class="nav-wrapper blue darken-1">
      <a href="" class="brand-logo" style="margin-left: 10px;"> LAPANGANBANG!</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">Masuk</a></li>
        <li><a href="register.php">Daftar</a></li>
        <li><a href="" target="_blank">About</a></li>
      </ul>
<!--      <form>
        <div class="input-field">
        <div class= "col s6">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
        </div>
      </form>
-->
    </div>
</nav>
</div>
<br />
 <div class="slider">
    <ul class="slides">
      <li>
        <img src="image/LapFutsal.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="image/LapFutsal.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

<div class="row">
<div class="col s12">
<h5>LIST LAPANGAN</h5><br />
<a href="input.php" title="Tambah Data" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <table class="bordered">
        <thead>
          <tr>
          <th data-field="id">No</th>
              <th data-field="id">Nama Lapangan</th>
              <th data-field="name">Jenis</th>
              <th data-field="name">Alamat</th>
              <th data-field="price">Harga/jam</th>
          </tr>
        </thead>
<?php
	$no = 1;
  $sql = "select * from lapangan";
  $data = mysqli_query($conn, $sql);
  while($d = mysqli_fetch_array($data)){
	?>
 <!-- <tbody> -->
      <?php $harga_sewa = $d['harga_lapangan']*1000 ?>    
    <div class="responsive-table">
    <tr>
      <td><?php echo $no++; ?></td>
  		<td><?php echo $d['nama_lapangan']; ?></td>
  		<td><?php echo $d['tipe_lapangan']; ?></td>
  		<td><?php echo $d['alamat_lapangan']; ?></td>
      <td><?php echo "Rp ".$harga_sewa.",00"; ?></td>   
      <td>  
            <a href="edit.php?id=<?php echo $d['id_lapangan']; ?>&aksi=edit" class="btn-floating light-blue"><i class="material-icons">mode_edit</i></a>
            <a href="" class="btn-floating light-blue darken-1"><i class="material-icons">zoom_in</i></a>
            <a href="" class="btn-floating light-blue darken-2"><i class="material-icons">delete</i></a>
            


 <!--           <a href="proses.php?id=<?php echo $d['id']; ?>&aksi=hapus" class="btn-floating green"><i class="material-icons">delete</i></a> -->
      </td>
    </tr>
    </div>
 <!-- </tbody> -->
        <?php 
	}
	?>
      </table>
</div>
    </div>
  
<footer class="page-footer blue darken-1">
          <div class="footer-copyright">
            <div class="container"><a class="grey-text text-lighten-4 right" href=""></a>
            </div>
          </div>
        </footer>
        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html> 