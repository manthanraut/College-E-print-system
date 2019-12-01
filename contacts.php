<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
.title {
  color: grey;
  font-size: 18px;
}
body{
  background-color:white;
    background-size:cover;
    margin:0;
	padding:0;
    font-family:new time roman;
}
.column {
  float: left;
  width: 33.3%;
  margin-top:30px;
  margin-bottom: 16px;
  padding: 0 8px;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.card {
  box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color:rgba(0,0,0,0.1);
}
.container {
  padding: 0 16px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
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

}
.mail{
  font-family: monospace;
  font-size:20px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
button:hover{ 
  opacity: .6;
}
a:hover {
  opacity:1;
}
p,h4,h1{
  font-family:new time roman;
}
body { 
			animation: fadeInAnimation ease 3s; 
		
			animation-fill-mode: forwards; 
		} 
		@keyframes fadeInAnimation { 
			0% { 
				opacity: 0; 
			} 
			100% { 
				opacity: .9; 
			} 
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
<title>Contact details</title>
</head>
<body onload=display_ct();>
<ul>
  <li><a href="index.html" style="float:right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li><a href="verified.php" style="float:right;"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
  <li><a href="signin.php" style="float:right;"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
  <span id='ct' style="float:right;background-color:white;color:black;box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.6);border:2px solid black;margin-top:15px;padding:4px;border-radius:16px;margin-right:20px;"></span>
</ul>
  
<div class="row">
  <div class="column">
    <div class="card" style="height:524px;width:380px;">
  <img src="imgs/manthan.png" alt="Manthan" style="width:100%;height:60%;">
  <h1>Manthan Raut</h1>
  <p>RAIT,D Y Patil University,Navi Mumbai</p>
  <h4 style="color:red;">Mail ID:<br>manthanraut16@gmail.com</h4>
  <div style="margin: 24px 0;">
    <a href="https://github.com/manthanraut"><i class="fa fa-github"></i> </a>   
    <a href="#"><i class="fa fa-linkedin"></i> </a>  
    <a href="#"><i class="fa fa-facebook"></i> </a> 
  </div>
</div>
  </div>
</div>
</body>
</html>
