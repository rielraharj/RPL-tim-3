<?php
  include 'connect.php';  
?>
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



<title>
	Register Member
</title>
	
	<link type="text/css" rel="stylesheet" href="css/csslogin.css"/>

<html>
	<head>
		  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
		  <style>
		    body {
		      display: flex;
		      min-height: 100vh;
		      flex-direction: column;
		    }

		    main {
		      flex: 1 0 auto;
		    }

		    body {
		      background: #fff;
		    }

		    .input-field input[type=date]:focus + label,
		    .input-field input[type=text]:focus + label,
		    .input-field input[type=email]:focus + label,
		    .input-field input[type=password]:focus + label {
		      color: #e91e63;
		    }

		    .input-field input[type=date]:focus,
		    .input-field input[type=text]:focus,
		    .input-field input[type=email]:focus,
		    .input-field input[type=password]:focus {
		      border-bottom: 2px solid #e91e63;
		      box-shadow: none;
		    }
		  </style>
		</head>

		<body>
		  <div class="section"></div>
		  <main>
		    <center>
		    

		      <h5 class="blue-text">Daftar akun anda</h5>
		      <div class="section"></div>

		      <div class="container">
		        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

		          <form class="col s12" action="regprocess.php" method="post" id="register">
		            <div class='row'>
		              <div class='col s12'>
		              </div>
		            </div>

		            <div class='row'>
		              <div class='input-field col s12'>
		                <input class='validate' type='email' name='emailuser' id='emailuser' />
		                <label for='email'>Masukkan email</label>
		              </div>
		            </div>

		            <div class='row'><left>
		              <div class='input-field col s12'>
		                <input class='validate' type='password' name='pwuser' id='pwuser' />
		              <label for='password'>Masukkan Password</label></left>
		              </div>
					  
					  <div class='row'><left>
		              <div class='input-field col s12'>
		                <input class='validate' type='password' name='verpwuser' id='verpwuser' />
		              <label for='password'>Verifikasi Password</label></left>
		              </div>

		              <div class='row'><left>
		              <div class='input-field col s12'>
		                <input class='validate' type='text' name='name' id='name' />
		              <label for='nama'>Nama User</label></left>
		              </div>

		            <label>Alamat</label>
			        <select class="browser-default" name="alamat" id="alamat" class="validate" form="register">
			          <option value="" disabled selected>Pilih alamat</option>
			          <option value="Babakan raya">Babakan raya</option>
			          <option value="Babakan tengah">Babakan tengah</option>
			          <option value="Babakan lebak">Babakan lebak</option>
			          <option value="Babakan lio">Babakan lio</option>
			          <option value="Perwira">Perwira</option>
			          <option value="Dramaga cantik">Dramaga cantik</option>
			          <option value="Dramaga hijau">Dramaga hijau</option>
			        </select><br>

	              	  
	              	  <label style='float: right;'>
						<a class='pink-text' href='#!'><b>Lupa password?</b></a>
					  </label>
		            </div>

		            <br />
		            <center>
		              <div class='row'>
		                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue darken-1'>Daftar</button>
		              </div>
		            </center>
		          </form>
		        </div>
		      </div>

		    </center>

		    <div class="section"></div>
		    <div class="section"></div>
		  </main>

		  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
		  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
		</body>
</html>