<?php

include("conn.php");

if (isset($_POST['submit']))
 {
	$email = $_POST['email'];
	$pwd = $_POST['password'];

    $query =" SELECT * FROM login where email = '$email' && password = '$pwd' ";

    $data = mysqli_query($conn , $query);
    $total = mysqli_num_rows($data);

    echo $total;

    if ($total == 1)
     {
    	echo " login successful";

     }
     else{
     	echo " <font color ='red'> Login Failed </font>";

     }
}






