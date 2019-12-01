
<!doctype html>
<html>
	<head>
		<title>User Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Add icon library -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
	function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address");  
  document.getElementById("email").focus();
  return false;  
  }  
}   
</script>
<style>
body
{
	
	margin:0;
	padding:0;
	background-color:#e6e6e6;
	background-size:cover;
	font-family: sans-serif; 
}
h2
{
	margin:0;
	padding:0 0 20px;
	color:#1E90FF;
	text-align:center;
} 
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
  font-family:new time roman;
}
.loginBox p
{
	padding:0;
	margin:0;
	font-weight:bold;
	color:#fff;
	
} 
.loginBox input
{
	width:100%;
	margin-bottom: 20px; 
}
.loginBox input[type="password"],input[type="text"]
{
	border: none;
	border-bottom: 1px solid black;
	background: transparent;
	outline:none;
	height:40px;
	color:black;
	font-size: 16px;
}

.chk{
	margin-left:0px;
}
.loginBox input[type="submit"]
{
	border:none;
	outline:none;
	height: 40px;
	color:#fff;
	font-size:16px;
	background: rgb(255,38,126);
	cursor:pointer;
    border-radius:20px;
    font-size:20px;
    font-family:monospace;
}


.loginBox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}
.loginBox a
{
	color: #fff;
	font-size:14px;
	font-weight:bold;
} 
.loginBox
{
	box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
	position:absolute;
	top:55%;
	left:50%;
	transform: translate(-50%, -50%);
	width:350px;
	height:440px;
	padding:80px 40px;
	box-sizing: border-box;
	background-color:white;
	border-radius:20px;
	
}
.loginBox input[type="email"]
{
	border: none;
	border-bottom: 1px solid black;
	background: transparent;
	outline:none;
	height:40px;
	color:black;
	font-size: 16px;
	
	
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#e60000;
  font-family:new time roman;
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
input.chkbox { 
			width: 20px; 
			height: 20px; 
		}
#ps :hover{

	text-decoration:underline;
}

.user
{
	width:100px;
	height:100px; 
	overflow:hidden;
	position:absolute;
	top:calc(-100px/2);
	left:calc(50% - 50px);
	border-radius:50%;
}
@media only screen and (max-width: 420px) { 
	.loginBox
{
	box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
	position:absolute;
	top:85%;
	left:50%;
	transform: translate(-50%, -50%);
	width:330px;
	height:auto;
	padding:80px 40px;
	box-sizing: border-box;
	background-color:white;
	border-radius:20px;
	margin-bottom:50px;
	
}
}
@media only screen  and (max-width: 349px) { 
	.loginBox
{
	top:78%;
	width:320px;
}
}

</style>
<script type="text/javascript">
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
	</head>
	<body onload=display_ct();>
	<ul>
  <li><a href="index.html" style="float:right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li><a href="verified.php" style="float:right;"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
  <span id='ct' style="float:right;background-color:white;color:black;box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.6);border:2px solid black;margin-top:15px;padding:4px;border-radius:16px;margin-right:20px;"></span>

</ul>
			
	<div class="loginBox">
		
		<img src="imgs/user.png" class="user">
		<h2 style="font-family:times;font-size:30px;background: -webkit-linear-gradient(black,blue);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Log In Here</h2>
		<form name="myform" action="server.php" method="POST" autocomplete="off" onsubmit="return validateemail();">
			<i class="fa fa-user icon"></i>	
			<input type="email" name = "email" id ='email' placeholder="Enter Email" style="border-bottom: 1px solid black;" required>
			<i class="fa fa-key icon"></i>
			<input type="password" name = "passwd" id='psw' placeholder="Enter Password" required>
			<!--<p>Check password</p>-->
			<table>
				<tr>
				   <td><div> <p style="margin-bottom:20px;font-size:18px;color:black;">Check password</p> </div></td>
				   <td><div> <input type="checkbox" style="margin-left:10px;" class='chkbox' onclick="myFunction()"></div></td>
				</tr>
			 </table>

			<input type="submit" name = "login_user" style="font-family:courier header;" value="Log In As User">
			<a href="step1.php" id ="ps"><p style="font-size:20px;color:black;font-family:new times roman;background: -webkit-linear-gradient(black,red);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Forget Password</p></a> 
			
		</form>
	</div>
	</body>
</html>