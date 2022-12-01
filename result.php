    <!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Search | Result</title>
		<link rel="icon" href="favicon.png" type="image/icon type">
		<style type="text/css">

			#searchfield
			{ 
				width: 500px;
				height: 35px;
				border-radius: 5px;
				border: 1px solid green;

			}
			#gobtn{
				width: 100px;
				height: 39px;
				border-radius: 5px;
				border: 1px solid green;
				background-color: white;
				font-size: 17px;

			}
			#gobtn:hover{
				background-color: green;
				color: white;
			}
		</style>
	</head>

	<body>


		<form action="result.php" method="GET">
			<table border="0" width="100%" bgcolor="f2f2f2">
				<tr>
					<td width="10%">
						<a href="index.php"><img src="image.png" width="70%" style="border-radius: 100%; " ></a>
					</td>
					<td>
						<input type="text" id="searchfield" name="rsearchbar" id="" style="font-size: 20px;">
						<input type="submit" name="rsearch1" value="GO!" id="gobtn">
					</td>

				</tr>
			</table>

<table border="0" style="margin-left: 100px;">


<?php

include("connection.php");
if (isset($_GET['search1']))
 {
  $search =$_GET['searchbar'];
  if ($search=="")
          {
       	echo "please write somthing in search box";
		exit();
	   }
	$query = "select * from websitedb where website_keywords like '%$search%' limit 0,4";
	$data = mysqli_query($conn,$query);

   if(mysqli_num_rows($data)<1)
   {
   	echo "Result not found";
    exit();
   }

echo "<a href='https://www.google.com/search?q=$search' style='margin-left:105px;'>More Images for 
$search</a> ";

while($row = mysqli_fetch_array($data))
{
	//echo "<td><img src='$row[4]' width='200px;'></td>";
}
}

if (isset($_GET['rsearch1']))
 {
	$search =$_GET['rsearchbar'];
if ($search=="")
       {
       	echo "please write somthing in search box";
		exit();
	   }
	$query = "select * from websitedb where website_keywords like '%$search%' limit 0,4";
	$data = mysqli_query($conn,$query);

   if(mysqli_num_rows($data)<1)
   {
   	echo "result not found";
    exit();
   }
echo "<a href='$search' style='margin-left:105px;'>More Images for 
$search</a> ";

while($row = mysqli_fetch_array($data))
{
//echo "<td><img src='$row[4]' width='200px;'></td>";
}

}
?>
</tr>
</table>
</form>	
<?php  

include("finalsearch.php");
?>
</body>
</html>