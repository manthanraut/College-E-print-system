
<!doctype html>
<html>
	<head>
		<style>
			body
{
	
	margin:0;
	padding:0;
	background:url("imgs/background.jpg");
	background-size:cover;
	font-family: sans-serif; 
}
			</style>
		<title>User Login</title>
		<link rel="stylesheet" type="text/css"  href="css/loginuser.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Add icon library -->
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
.loginBox
{
	position:absolute;
	top:50%;
	left:50%;
	transform: translate(-50%, -50%);
	width:350px;
	height:440px;
	padding:80px 40px;
	box-sizing: border-box;
	background:rgba(0,0,0,0.6) ;
}
.loginBox input[type="email"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline:none;
	height:40px;
	color:#fff;
	font-size: 16px;
	
	
}
</style>
	</head>
	<body>
			<div class="topnav">
					<h3><a href="http://localhost/College-E-print-system/home.php" style="float:right;">Home</a></h3>
					<h3><a href="http://localhost/College-E-print-system/verified.php" style="float:right;">Sign Up</a></h3>
					
					<h3><a href="http://localhost/College-E-print-system/admin_login.php" style="float:right;">Admin</a></h3>
					
				  </div>
	<div class="loginBox">
		
		<img src="user.png" class="user">
		<h2 style="font-family:cursive;">Log In Here</h2>
		<form name="myform" action="http://localhost/College-E-print-system/server.php" method="POST" autocomplete="off" onsubmit="return validateemail();">
		
			<input type="email" name = "email" id ='email' placeholder="Enter Email" required>
		
			<input type="password" name = "passwd" id='psw' placeholder="Enter Password" required>
			<!--<p>Check password</p>-->
			<table>
				<tr>
				   <td><div> <p style="margin-bottom:20px;">Check password</p> </div></td>
				   <td><div> <input type="checkbox" style="margin-left:10px;" onclick="myFunction()"></div></td>
				</tr>
			 </table>

			<input type="submit" name = "login_user" style="font-family:courier header;" value="Log In As User">
			<a href="#"> Forget Password</a> 
			
		</form>
	</div>
	</body>
</html>