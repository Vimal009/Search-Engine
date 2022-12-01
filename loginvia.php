<?php
include("conn.php");
error_reporting(0);
if(isset($_POST['submit']))
{        
   $email=$_POST['email'];
   $pwd=$_POST['password'];

   $query=" SELECT * FROM LOGIN WHERE EMAIL='$email' && BINARY PASSWORD='$pwd'";
   
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   //echo $total;
if ($total==1)
{
echo '<script>alert("Login Successful")</script>';
header( "refresh:1; url=index.php" ); 
//header('location:index.php');
}
else
{
echo '<script>alert("Login Failed")</script>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Login </title>
<link rel="icon" href="favicon.png" type="image/icon type">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="css/style.css" />

<style type="text/css">
form i{
        margin-left: -30px;
        cursor: pointer;
       }
</style>

<style>
   body{
        font-family: Arial, Helvetica, sans-serif;
       }

    * {
        box-sizing: border-box;
       }
  .container{
        position: relative;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px 0 30px 0;
       } 
   input,.btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover{
          opacity: 1;
          }
.fb {
     background-color: #3B5998;
     color: white;
    }
.twitter {
          background-color: #55ACEE;
          color: white;
         }

.google {
        background-color: #dd4b39;
        color: white;
        }
input[type=submit]
     {
       background-color: #04AA6D;
       color: white;
       cursor: pointer;
     }
input[type=checkbox]
    {
     text-align: left;
    } 
input[type=submit]:hover
   {
    background-color: #45a049;
   }
.col{
     float: left;
     width: 50%;
     margin: auto;
     padding: 0 50px;
     margin-top: 6px;
    }
.row:after
{
  content: "";
  display: table;
  clear: both;
}
.vl {
     position: absolute;
     left: 50%;
     transform: translate(-50%);
     border: 2px solid #ddd;
     height: 175px;
    }
.vl-innertext
    {
     position: absolute;
     top: 50%;
     transform: translate(-50%, -50%);
     background-color: #f1f1f1;
     border: 1px solid #ccc;
     border-radius: 50%;
     padding: 8px 10px;
    }
.hide-md-lg
    {
     display: none;
    }
.bottom-container
    {
     text-align: center;
     background-color: #666;
     border-radius: 0px 0px 4px 4px;
    }
@media screen and (max-width: 650px)
 {
  .col {
       width: 100%;
       margin-top: 0;
       }
  .vl {
        display: none;
      }
  .hide-md-lg
   {
    display: block;
    text-align: center;
   }
}
</style>
</head>
<body>
<div class="container">
  <form action="" method="POST">
    <div class="row">
      <h2 style="text-align:center; margin-top: 100px;">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjYyMjIxMTM3LCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3Dredirect_uri=http%3A%2F%2Flocalhost%2Fsearch%2Findex.php&state&scope=email%20profile&approval_prompt=auto&flowName=GeneralOAuthFlow" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="https://twitter.com/i/flow/signup" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="https://accounts.google.com/o/oauth2/auth/identifier?response_type=code&access_type=online&client_id=1022359273618-559koacjj6qug72vqptack0pv0c62s4j.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2Fsearch%2Findex.php&state&scope=email%20profile&approval_prompt=auto&flowName=GeneralOAuthFlow" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>
      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <i class="bi bi-eye-slash" id="togglePassword"></i>
        <input type="submit" value="Login" name="submit">
      </div>
       </div>
      
  </form>
<script>
     const togglePassword = document.querySelector("#togglePassword");
     const password = document.querySelector("#password");
     togglePassword.addEventListener("click", function ()
     {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      this.classList.toggle("bi-eye");
      });     
</script>
</div>

<div class="bottom-container">
<div class="row">
  <div class="col">
    <a href="signupform.php" style="color:white" class="btn">Sign up</a>
  </div>
  <div class="col">
    <a href="resetpassword.php" style="color:white" class="btn">Forgot password?</a>
  <div class="col">
    <a href="adminlogin.php" style="color:white" class="btn">Admin Login</a>
  </div>
  </div>
 </div>
</div>
<div class="col">
    <a href="index.html" style="color:white" class="btn">Admin Login</a>
</div>

</body>
</html>