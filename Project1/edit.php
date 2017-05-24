<?php 
include 'koneksi.php';
$db = "penyewaan_lapangan";

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html" />
  <meta name="author" content="Hakko Bio Richard" />
  <title>LAPANGANBANG!</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
<div class="container">
<div class="col s12">
<nav>
    <div class="nav-wrapper blue darken-1">
      <a href="" class="brand-logo" style="margin-left: 10px;"> LAPANGANBANG!</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="">SIGN IN</a></li>
        <li><a href="">SIGN UP</a></li>
        <li><a href="" target="_blank">ABOUT</a></li>
      </ul>
    </div>
  </nav>
</div>
<br />
<div class="row">
<div class="col s6">
<h5><class="material-icons"> EDIT LAPANGAN </h5><br />
      <form action="proses.php?aksi=update" method="post">
 
<?php  
     $qryTampil=mysqli_query($conn,"SELECT * FROM lapangan WHERE id_lapangan=$_GET[id]");
     $d = mysqli_fetch_array($qryTampil);
     //echo $d['alamat_lapangan'];
     //if($dataTampil=mysqli_fetch_array($qryTampil)) echo "Berhasil";
     //else echo "Gagal";  
     ?>       
<?php
//foreach($db->edit($_GET['id']) as $d){
?>
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="hidden" name="id" value="<?php echo $d['id_lapangan']; ?>" id="id" class="validate">
          <input id="icon_prefix" type="text" name="nama" id="nama" value="<?php echo $d['nama_lapangan']; ?>" class="validate">
          <label for="icon_prefix">Nama</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix"></i>
          <input id="icon_telephone" type="text" name="alamat" id="alamat" value="<?php echo $d['alamat_lapangan']; ?>"  class="validate">
          <label for="icon_telephone">Alamat</label>
        </div>

        <label>Jenis Lapangan</label>
        <select class="browser-default" name="tipe_lapangan" id="tipe_lapangan" value="<?php echo $d['tipe_lapangan']; ?>" class="validate">
          <option value="" disabled selected>Pilih jenis lapangan</option>
          <option value="Basket">Basket</option>
          <option value="Futsal">Futsal</option>
          <option value="Badminton">Badminton</option>
          <option value="Voli">Voli</option>
        </select>


        <div class="input-field">
        <i class="material-icons prefix">message</i>
          <input class="btn waves-effect waves-light" type="submit" value="Simpan">
        </div>
        <?php// } ?>
    </form>
  
    </div>
</div>  
<footer class="page-footer blue darken-1">
          <div class="footer-copyright">
            <div class="container">
            
            <a class="grey-text text-lighten-4 right" href="http://www.hakkoblogs.com"></a>
            </div>
          </div>
        </footer>
        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>