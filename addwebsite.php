<!Doctype>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> ADD WEBSITE! </title>
 <link rel="icon" href="favicon.png" type="image/icon type">
<link rel="icon" href="favicon.png" type="image/icon type">
<style>
   input{
        width: 500;
	height: 35px;
	border: 1px solid green;
	border-radius: 5px;
	background-color: white;
	color: green;
	}
#addbtn{
        width: 100;
	height: 35px;
	border: 1px solid green;
	border-radius: 5px;
	background-color: white;
	color: green;
	font-size: 20px;
       }
#cancelbtn
       {
	width: 100;
	height: 35px;
	border: 1px solid green;
	border-radius: 5px;
	background-color: white;
	color: red;
        font-size: 20px;
       }
#addbtn:hover
       {
	background-color: green;
	color: white;
       }
#cancelbtn:hover
       {
	background-color: red;
	color: white;  }
#desc{
      width: 500;
      height: 100px;
      border: 1px solid green;
      border-radius: 5px;
     }
</style>
</head>
<body>
    <font size="7"> <b>
    <p align="center"> ADD A WEBSITE</p>
   </font>
<form action="" method="POST" enctype="multipart/form-data">
     <table border="0" width="55%" align="center" cellspacing="10">
     <tr>
     	<td> website title</td>
	<td><input type="text" name="t1"></td>
    </tr>
    <tr>
	<td> website link </td>
	<td><input type="text" name="t2"></td>
    </tr>
     <tr>
        <td> website keywords </td>
        <td><input type="text" name="t3"></td>
    </tr>
    <tr> 
        <td>website description </td>
        <td><textarea name="websitedescription"  id="desc"></textarea></td>
   </tr>
    <tr>
    	<td> website image</td>
        <td><input type="file" name="f1"></td>
   </tr>
    <tr>
       <td colspan="2" align="center"> <input type="submit" name="websearch"id="addbtn">&nbsp &nbsp
      <input type="reset" name="r1" id="cancelbtn"></td>
   </tr>
</table>
</form>
</body>

<?php
include("connection.php");
error_reporting(0);
if($_POST["websearch"])
 {
	$website_title=$_POST['t1'];
	$website_link=$_POST['t2'];
	$website_keyword=$_POST['t3'];
	$website_description=$_POST['websitedescription'];

	$filename= $_FILES["f1"]["name"];
	$tempname= $_FILES["f1"]["temp_name"];

	$folder= "website_images/".$filename;
	move_uploaded_file($tempname,$folder);

if($website_title!="" && $website_description!="" && $website_keyword!= "" && $website_description!=""  && $filename!= "")
{
$query = "INSERT INTO  websitedb values ('$website_title','$website_link','$website_keyword','$website_description','$folder')";

$data=mysqli_query($conn,$query);
}
if($data){
	
	echo "<script> alert('website Inserted')</script>";
}
else
{
	echo "<script> alert('failed to insert website') </script>";
}
}
?>
</html>