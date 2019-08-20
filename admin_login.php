<!doctype html>

<html>
	<head>
		
		<title>Admin Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/loginadmin.css">
		<!--<link rel="stylesheet" href="css/loginadmin.css" type="text/css" >-->
	
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
.loginBox input[type="text"], .loginBox input[type="password"]
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
  font-size:25px;

}
.loginBox
{
	position:absolute;
	left:37%;
	top:20%;
	width:350px;
	height:420px;
	padding:80px 40px;
	box-sizing: border-box;
	background-color:white;
	
}
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
  font-family:new time roman;
}
#ps1 :hover{

text-decoration:underline;
}
	</style>
	<body>
	<ul>
  <li><a href="http://localhost/College-E-print-system/home.php" style="float:right;">Home</a></li>
  <li><a href="http://localhost/College-E-print-system/contacts.php" style="float:right;">Contacts</a></li>
</ul>

	<div class="loginBox">
		
		<img src="imgs/admin.jpg" class="user">
		<h2 style="font-family:cursive;color:red">Admin LogIn</h2>
		<form autocomplete="off">
			<input type="text" name = "" placeholder="Enter Username">
			<input type="password" name = "" placeholder="Enter Password">
			<input type="submit" name = "" style="font-family:courier header;" value="Sign In As Admin">
			<a href="#" id="ps1"><p style="font-size:20px;font-family:new times roman;color:black;">Forget Password</p></a> 
			
		</form>
	</div>
	</body>
</html>