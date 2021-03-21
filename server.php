<?php

include "assets/includes/header.php";

// For local database only
define("DB_SERVER",'localhost');
define("DB_USERNAME", 'root');
define("DB_PASSWORD", '');
define("DB_NAME", 'StuCollab');

// If database already created (Local)
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_NAME);
if($conn === false){
	die("ERROR: COULDN'T CONNECT TO DATABASE " .  mysqli_connect_error());
}
else{
	// echo("Connected Successfully<br>");
}


// Checking if user logged in
session_start();
$_SESSION['user_id'] = 1;
$log = false;
if(isset($_SESSION['loggedin'])){
  if($_SESSION['loggedin']==true){
  	$fname = $_SESSION['first_name'];
    $lname = $_SESSION['last_name'];
    $log = true;
    
  }
}


// header("location: profile.php");


// To close the connection
// mysqli_close($conn);

?>
