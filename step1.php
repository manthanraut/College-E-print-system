
<!doctype html>
<html>
	<head>
		<title>Forgot Password</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Add icon library -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
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
body
{
	
	margin:0;
	padding:0;
	background-color:rgba(242, 242, 242, 1);
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
    width:100%;
	border:none;
	outline:none;
	height: 40px;
	color:black;
	background: rgba(240, 0, 0, .6);
	cursor:pointer;
    border-radius:10px;
    font-size:25px;
    font-family:Arial;
}


.loginBox input[type="submit"]:hover
{
	background: rgba(240, 0, 0, .9);
    color: white;
    box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.4);
}
.loginBox a
{
	color: #fff;
	font-size:14px;
	font-weight:bold;
} 
.loginBox
{
    box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.4);
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
@media only screen  and (max-width: 349px) { 
	.loginBox
{
	top:60%;
	width:300px;	
}
}
.loginBox input[type="email"]
{
    
	border: 1px solid rgba(214, 214, 214, 1);
	background-color:rgba(240, 240, 240, 1);
    outline:none;
    margin-top:30px;
	height:40px;
	color:black;
	font-size: 16px;
	
	
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:rgba(241, 14, 14, 1);
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
  font-size:25px;

}
input.chkbox { 
			width: 20px; 
			height: 20px; 
		}
#ps :hover{

	text-decoration:underline;
}
@media only screen and (max-width:420px){
	.loginBox
{
    box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.4);
    position:absolute;
	top:62%;
	left:50%;
	transform: translate(-50%, -50%);
	width:330px;
	height:auto;
	padding:60px 40px;
	padding-bottom:40px;
	box-sizing: border-box;
	background-color:white;
	border-radius:20px;
	margin-bottom:50px;
	
}
}
</style>
<script>
function validateemail(form){
	var Email=document.getElementById('email');
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if(reg.test(Email.value)){
	alert("Check your email for your password!");
	return true;
}
	else{
		return false;
	} 	}
</script>
	</head>
	<body>
	<ul>
  <li><a href="index.html" style="float:right;">Home</a></li>
  

</ul>
			
	<div class="loginBox">
		
		<img src="imgs/icon.png" class="user">
		<h2 style="color:black;font-size:30px;">Forgot Password</h2>
        <p style="color:black;font-size:13px">No Problem! Enter your email address below and we will send your password on your Email account</p>
		<form action="server.php" method="POST" autocomplete="off" onsubmit="return validateemail(this);">
            <input type="email" name = "email" id ='email' placeholder="Enter Email" style="border-bottom: 1px solid black;" required>
			<input type="submit" name="resetpsw"> 
		</form>
        <p style="color:black;margin-left:75px;font-size:18px;">Back to <a href="http://localhost/College-E-print-system/signin.php" style="color:blue;font-size:18px;">Login</a></p>
	</div>
	</body>
</html>