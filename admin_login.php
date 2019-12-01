<!doctype html>

<html>
	<head>
		
		<title>Admin Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/loginadmin.css">
		<!--<link rel="stylesheet" href="css/loginadmin.css" type="text/css" >-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
            <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<style>
loginBox p
{
	padding:0;
	margin:0;
	font-weight:bold;
	color:black;
} 
.loginBox input
{
	width:100%;
	margin-bottom: 20px; 
}
.loginBox input[type="text"], .loginBox input[type="password"], .loginBox input[type="text"]
{
	border: none;
	border-bottom: 2px solid black;
	background: transparent;
	outline:none;
	height:40px;
	color:black;
	font-size: 16px;	
}
		body
{
	background-color:#e6e6e6;
	margin:0;
	padding:0;
	background-size:cover;
	font-family:new time roman;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#e60000;
  padding-bottom:7px;
}

li {
  float: left;
  font-size:20px;
}

li a {
  display: block;
  color: white;
  text-align: center;

  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: white;
  color:black;
  

}
.loginBox
{
	border-radius:20px;
	box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
	position:absolute;
	top:55%;
	left:50%;
	transform: translate(-50%, -50%);
	width:350px;
	height:450px;
	padding:80px 40px;
	box-sizing: border-box;
	background-color:white;
	
}
@media (min-width: 320px) and (max-width: 420px) {
	.loginBox
{
	top:75%;
	left:50%;
	width:330px;
	height:auto;
	padding-bottom:60px;
	box-sizing: border-box;
	background-color:white;
	margin-bottom:50px;
}
}
@media only screen  and (max-width: 349px) { 
	.loginBox{
		top:70%;
		width:320px;
	}
}
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
  font-family:new time roman;
}
#ps1 :hover{

text-decoration:underline;
}
input.chkbox { 
			width: 20px; 
			height: 20px; 
		}
		
	</style>
	<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
document.getElementById('ct').innerHTML = String(x).slice(0,25);
document.getElementById('ct').style.fontSize='20px';

display_c();
 }
 </script>
	<body onload=display_ct();>
	<ul>
  <li><a href="index.html" style="float:right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <span id='ct' style="float:right;background-color:white;color:black;box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.6);border:2px solid black;margin-top:15px;padding:4px;border-radius:16px;margin-right:20px;"></span>
</ul>

	<div class="loginBox">
		
		<img src="imgs/admin.jpg" class="user">
		<h2 style="font-family:Times;font-size:25px;background: -webkit-linear-gradient(lightgreen,green);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Admin LogIn</h2>
		<form autocomplete="off" method="POST" action="server.php">

		<i class="fa fa-user icon"></i>	
		<input type="text" name = "username" placeholder="Enter Username">
		<i class="fa fa-key icon"></i>
			<input type="password" name = "adminpsw" placeholder="Enter Password" id="psw">
			<table>
				<tr>
				   <td><div> <p style="margin-bottom:20px;font-size:18px;color:black;">Check password</p> </div></td>
				   <td><div> <input type="checkbox" style="margin-left:10px;" class='chkbox' onclick="myFunction()"></div></td>
				</tr>
			 </table>

			<input type="submit" name = "submitadmin" style="font-family:courier header;" value="Sign In As Admin">
			
		</form>
	</div>
	</body>
</html>