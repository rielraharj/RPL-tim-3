<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "penyewaan_lapangan";

	function __construct(){
		mysqli_connect('localhost','root','','penyewaan_lapangan');
		mysqli_select_db($db);
	}

	function tampil_data(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$email){
		mysql_query("insert into user values('','$nama','$alamat','$usia','$email')");
	}

	function hapus($id){
		mysql_query("delete from user where id='$id'");
	}

	function edit($id){
		$data = mysql_query("select * from user where id='$id_user'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$email){
		mysql_query("update user set nama='$nama', alamat='$alamat', usia='$usia', email='$email'  where id='$id'");
	}

} 

?>