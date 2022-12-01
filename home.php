<!doctype html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Search Engine </title>
<link rel="icon" href="favicon.png" type="image/icon type">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	body{
		background-color:white;
	}
a{
text-decoration: none;

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
#searchbtn:hover{
  background-color:blue;
	color:white;
  }
footer{
  text-align: left;
  padding: 3px;
  background-color: white;
  color: white;
  }
@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; }}
table{
  	width: 100%;
  	border: 0;
     }
td{
	  text-align: right;
  }

a{
	outline: none;
 }
input [type=text]{
	border-radius: 50px;
	 display: flex;
  max-width: 100%; 
   height:auto;
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

</style>
</head>
<body>

<table>
 <tr>
   	<td >
  	 <button class="button button1"><b><a title="login and search here" href="loginvia.php"  >Log in</a></b></button>
  	 </td>
   </tr>
</table>
<br><br><br>
<center>
	   <img src = "image.png" width= "20%" >
</center>

<form autocomplete="on" action="" method="GET" > 
<center>
    <input type="text"name="searchbar" placeholder="Login and Search"class="fa fa-microphone" id="typing" style="border-radius:50px; font-size:20px;">
</center>
<br>
<center> <input type ="submit" name= "search1"  value= "search" id="searchbtn" style="border-radius: 50px" onclick="please()">
</center>
<script>
function please()
{
	alert("Please Login");
}
</script>

</form>
     <center>
	        <br><button onclick="voice()" style="font-size:24px"><i class="fa fa-microphone"></i></button>
     </center>

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