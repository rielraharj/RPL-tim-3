<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("lapanganbang", $connection);

session_start();// Starting Session
if(isset($_SESSION['login_user'])){
// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from user where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
}
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
 // Redirecting To Home Page
}
?>