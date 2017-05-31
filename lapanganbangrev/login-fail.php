
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

<?php
include('loginprocess.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>

<title>
	Login Member
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
		    

		      <h5 class="blue-text">Masuk ke akun anda</h5>
		      <div class="section"></div>

		      <div class="container">
		        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

		          <form class="col s12" action="loginprocess.php" method="post">
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
	              	  <label style='float: right;'>
						<a class='pink-text' href='#!'><b>Lupa password?</b></a>
					  </label>
		            </div>

		            <br />
		            <center>
		              <div class='row'>
		                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue darken-1'>Masuk</button>
		              </div>
		             <a href="register.php">Daftar member</a>
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