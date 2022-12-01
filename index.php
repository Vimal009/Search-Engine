<?php
include('config.php');
$login_button = '';

if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);
   $_SESSION['access_token'] = $token['access_token'];
   $google_service = new Google_Service_Oauth2($google_client);
   $data = $google_service->userinfo->get();
 
 if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }
 
 if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }
 
 if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}
if(!isset($_SESSION['access_token']))
{
$login_button = '<a href="'.$google_client->createAuthUrl().'"></a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Search Engine </title>
<link rel="icon" href="favicon.png" type="image/icon type">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.png" type="image/icon type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
   .container{
     text-align: right;
     size: 50p;
           }
   input{    
    width:700px;
    height:35px;
    border-radius:5px;
    border:1px solid green;
    outline: none;
    }
  #searchbtn{
    width:130px;
    height:40px;
    boder-radius:5px;
    border: 1px solid blue;
    color: blue;
    font-size: 18px;
    background-color:white;
    outline: none;
    }
  #searchbtn:hover
    {
    background-color:blue;
    color:white;
    }
  footer{
  text-align: left;
  padding: 3px;
  background-color: white;
  color: white;
  }
 .container
  {
   z-index: 1;
   }
 @media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; 
   }}
  .login{
    text-align: right;
    margin-right: 130px;
        }
 h6
 {
 text-align: right;
 }
.logo{
       margin-top: 25px;
     }
     .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  border-radius: 20px;

}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
a{
    outline: none;
    text-decoration: none;

 }
</style>
</head>
<body>
   <div class="container">
   <div class="panel panel-default">
<?php
   if($login_button == '')
   {
    echo '<h6> '.$_SESSION['user_first_name'].'</h6>';
    echo '<img src="'.$_SESSION["user_image"].'" width="80" height="80" style= "border-radius:50%;" class="img-responsive img-circle img-thumbnail" />';
   }
   else
   {
     echo '<div align="center">'.$login_button . '</div>';
   }
?>
   </div>
  </div >
<center class="logo"> <img src = "image.png" width= "20%" ></center>
<form autocomplete="on" action="result.php" method="GET" > 
<center>    
     <input type="text" name="searchbar"  placeholder="    Search..." style="border-radius: 50px; display: flex; font-size : 20px;" class="fa fa-microphone" id="typing" style="max-width:100%;height:auto;">
</center><br>

<center>
    <input type ="submit" name= "search1"  value= "search" id="searchbtn" style="border-radius: 50px">
 </center>
</form>

<center><br>
    <button onclick="voice()" style="font-size:24px"><i class="fa fa-microphone"></i></button>
</center> <br><br><br>

<div class="login">
<button class="button button1"><b><a href="logout.php">Log Out</a></b></button>
</div>

<script type="text/javascript">
 function voice()
 {
   var recognition = new webkitSpeechRecognition();
   recognition.lang="en-GB";
   recognition.onresult=function(event)
   {
   console.log(event);
   document.getElementById("typing").value = event.results[0][0].transcript;
   }
  recognition.start(); 
}
</script>

</body>
</html>