<?php 
include 'koneksi.php';
$db = "penyewaan_lapangan";
//$db = "penyewaan_lapangan";
 
if(!isset($_SESSION['id_user'])){
  ?>
  <script language="javascript">alert("Anda harus Login! "); document.location="login.php";</script>';
  <?php
}
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
              <li><a>Selamat datang  <?php echo $_SESSION['nama']?> </a></li>
              <li><a href="index.php">Keluar</a></li>
              <!-- <li><a href="" target="_blank">About</a></li> -->
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
          <input id="icon_prefix" type="hidden" name="id" value="<?php echo $d['id_lapangan']; ?>" id="id" class="validate">
          <input id="icon_prefix" type="text" name="nama_lapangan" id="nama_lapangan" value="<?php echo $d['nama_lapangan']; ?>" class="validate">
          <label for="icon_prefix">Nama</label>
        </div>

        <div class="input-field">
          <input id="icon_telephone" type="text" name="alamat_lapangan" id="alamat_lapangan"  value="<?php echo $d['alamat_lapangan']; ?>" class="validate">
          <label for="icon_telephone">Alamat</label>
        </div>

        <label>Jenis Lapangan</label>
        <select class="browser-default" name="tipe_lapangan" id="tipe_lapangan" value="<?php echo $d['tipe_lapangan']; ?>" class="validate">
          <option value="" disabled selected>Pilih jenis lapangan</option>
          <option value="Basket">Basket</option>
          <option value="Futsal">Futsal</option>
          <option value="Badminton">Badminton</option>
          <option value="Voli">Voli</option>
        </select><br>

        <label>Photo</label>
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      

        <!--<div class="input-field col s6">
           <input id="waktu_sewa" type="date" class="datepicker">
        </div>-->  
        <label>Harga sewa/jam (ribu rupiah)</label>
        <div class="range-field">
            <input type="range" name="harga_lapangan" id="harga_lapangan" min="0" max="150"/>
        </div>
      
         <!--<div class="input-field">
            <input id="icon_telephone" type="text" name="tipe_lapangan" id="tipe_lapangan" class="validate">
            <label for="icon_prefix">Jenis lapangan</label>
         </div>
          -->

         <div class="input-field">
             <input class="btn waves-effect waves-light" type="submit" value="Simpan">
             <input class="btn waves-effect waves-light" type="reset" value="Hapus">
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