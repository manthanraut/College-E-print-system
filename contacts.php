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
  font-size:25px;

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
</style>
</head>
<body>
<ul>
  <li><a href="http://localhost/College-E-print-system/home.php" style="float:right;">Home</a></li>
  <li><a href="http://localhost/College-E-print-system/verified.php" style="float:right;">Sign Up</a></li>
  <li><a href="http://localhost/College-E-print-system/signin.php" style="float:right;">Sign In</a></li>
  <li><a href="http://localhost/College-E-print-system/admin_login.php" style="float:right;">Admin</a></li>
</ul>
  
<div class="row">
  <div class="column">
    <div class="card">
  <img src="imgs/akilesh.jpg" alt="Akilesh" style="width:100%;">
  <h1>Akilesh Salunkhe</h1>
  <p>RAIT,D Y Patil University,Navi Mumbai</p>
  <h4 style="color:red;">Mail ID:<br>akileshsalunkhe99@gmail.com</h4>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-github"></i> </a>
    <a href="#"><i class="fa fa-linkedin"></i> </a>  
    <a href="#"><i class="fa fa-facebook"></i> </a> 
  </div>
</div>
    </div>

  <div class="column">
    <div class="card" style="height:600px;width:380px;">
  <img src="imgs/hello.jpg" alt="Manthan" style="width:100%;height:65%;">
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
  <div class="column">
    <div class="card">
  <img src="imgs/shayantan.jpg" alt="Shayantan" style="width:100%;">
  <h1>Shyantan Santra</h1>
  <p>RAIT,D Y Patil University,Navi Mumbai</p>
  <h4 style="color:red;">Mail ID: shayantan.santra@gmail.com</h4>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-github"></i>  </a> 
    <a href="#"><i class="fa fa-linkedin"></i>  </a>  
    <a href="#"><i class="fa fa-facebook"></i>  </a> 
  </div>
</div>
  </div>
</div>

</body>
</html>