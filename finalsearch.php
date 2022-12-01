<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> search engine </title>
       <link rel="icon" href="favicon.png" type="image/icon type">
	<link rel="icon" href="favicon.png" type="image/icon type">
</head>
<body>
<table border="0" style="margin-left: 100px;">
<?php
include('connection.php');
error_reporting(0);

$querys = "select * from websitedb where website_keywords like '%$search%' ";
 $data1 = mysqli_query($conn,$querys);
 while($row1 = mysqli_fetch_array($data1))
  { 
echo"<tr>
        <td>
        <font size ='4' color='#0000cc'><b>
      <a href='$row1[1]' style='color='#0000cc';>$row1[0]</b></a></font><br>";
echo "<font color='#006400'>$row1[1]</font><br>";
echo "<font color='#666666'>$row1[3]</font><br><br>
        </td>
    </tr>";
  }
?>
</table>
	
</body>
</html>