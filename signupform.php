<?php
    include("conn.php");
   error_reporting(0);

if (isset($_POST['submit']))
 {
   $user =$_POST['username'];
   $email =$_POST['email'];
   $pass =$_POST['password'];
   $cpass =$_POST['cpassword']; 

   $pass = password_hash($password, PASSWORD_BCRYPT);
   $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

   $select = mysqli_query($conn, "SELECT * FROM login WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select))
{
 echo '<script>alert("Email already exist !! please Log in")</script>';
header( "refresh:1; url=logi.php" );
}
else
{

   $query =" INSERT INTO login (username,email,password,cpassword) values ( '$user','$email', '$pass','$cpass')" ;
   $data =mysqli_query($conn, $query);

  if($data)
           {
echo '<script>alert("Signup Successful")</script>';
header( "refresh:1; url=index.php" );
           }
 else {   
      echo '<script>alert("Failed to insert")</script>';
      }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Signup </title>
<link rel="icon" href="favicon.png" type="image/icon type">
  <link rel="stylesheet" href="style.css"> 
</head>

<body>
  <div class="signupFrm">
    <form action="" class="form" method="POST" onSubmit = "return checkPassword(this)">
      <h1 class="title">Sign up</h1>     
      <div class="inputContainer">
      <input type="text" class="input" placeholder="a" name="username" required>
      <label for="" class="label">Username</label>
      </div>

      <div class="inputContainer">
        <input type="Email" class="input" placeholder="a"  name="email" required>
        <label for="" class="label">Email</label>
      </div>

     <div class="inputContainer">
        <input type="password" class="input" placeholder="a" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
        <label for="psw" class="label">Password</label>
    </div>

    <div class="inputContainer">
       <input type="password" class="input" placeholder="a" name="cpassword" id="myInput" required>        
        <label for="" class="label">Confirm Password</label>
    </div>
      <input type="checkbox" onclick="myFunction()" onmouseover="one()">Show Password
      <input type="submit" class="submitBtn" value="Sign up" name="submit">

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function checkPassword(form)
   {
         password1 = form.password.value;
         password2 = form.cpassword.value;
   if (password1 != password2) 
      {
        alert ("\nPassword did not match: Please try again...")
        return false;
      }
   }
</script>
</form>
</div>
<div id="message">
  <h3 >Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
        
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box

myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>
</html>