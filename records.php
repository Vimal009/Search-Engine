<?php
$conn = mysqli_connect("localhost","root","","logindatabase");
$query = "SELECT * FROM login ORDER BY id asc";
$query_run = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Details</title>
  <link rel="icon" href="favicon.png" type="image/icon type">
  <link rel="icon" href="favicon.png" type="image/icon type">

<style>
   table {
        margin: 0 auto;
        font-size: large;
        border: 1px solid black;
        }
   h1 {
        text-align: center;
        color: blue;
        font-size: xx-large;
        font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
      }
   td {
        background-color: #E4F5D4;
        border: 1px solid black;
      }
th,td {
       font-weight: bold;
       border: 1px solid black;
       padding: 10px;
       text-align: center;
      }
  td {
       font-weight: lighter;
     }
</style>

</head>
<body>
<section>
      <h1>User Details</h1>
 <table>
    <tr>
      <th>ID</th>
      <th>USERNAME</th>
      <th>EMAIL ID</th>
      <th>PASSWORD</th>
      <th>CONFIRM PASSWORD</th>
     </tr>
     <?php
     while($rows=$query_run->fetch_assoc())
     {
        ?>
        <tr>
    <td><?php echo $rows['id'];?></td>
    <td><?php echo $rows['username'];?></td>
    <td><?php echo $rows['email'];?></td>
    <td><?php echo $rows['password'];?></td>
     <td><?php echo $rows['cpassword'];?></td>
</tr>
<?php
}
?>
</table>
</section>
</body>
</html>