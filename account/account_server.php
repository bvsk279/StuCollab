<?php

require("./account_header.php");

// For local database only
define("DB_SERVER",'localhost');
define("DB_USERNAME", 'root');
define("DB_PASSWORD", '');
define("DB_NAME", 'StuCollab');

// First run (Local)
// $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);

// // First run only - Creating database

// $sql = "CREATE DATABASE ".DB_NAME;
// if(mysqli_query($conn, $sql)){
// 	echo "Created Database successfully";
// }
// else{
// 	echo("Error creating database : ". mysqli_error($conn));
// 	exit();
// }


// Creating table
// Only first run

// $sql = "CREATE TABLE USERS(
// 		user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
// 		username VARCHAR(50) NOT NULL UNIQUE,
// 		password VARCHAR(255) NOT NULL,
// 		email VARCHAR(255) UNIQUE NOT NULL,
// 		first_name VARCHAR(30) NOT NULL,
//     last_name VARCHAR(30) NOT NULL)";

// if(mysqli_query($conn, $sql)){
// 	echo("Created Table successfully");
// }
// else{
// 	echo("Error creating table : ". mysqli_error($conn));
// }

// If database already created (Local)
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_NAME);
if($conn === false){
	die("ERROR: COULDN'T CONNECT TO DATABASE " .  mysqli_connect_error());
}
else{
	echo("Connected Successfully<br>");
}


// header("location: profile.php");


// To close the connection
// mysqli_close($conn);

?>
