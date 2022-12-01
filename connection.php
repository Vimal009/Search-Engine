<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname = "websitedatabase";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	//echo "connection success";
}

else {
	die("connection failed".mysql_connect_error);
}

?>