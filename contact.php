<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  border-radius: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  color:white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color:black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
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
.button:hover {
  background-color: #555;
}
.mail{
  font-family: monospace;
  font-size:20px;
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
      <img src="imgs/manthan.jpg" style="margin-left: 50px;margin-top:50px; width:330px ;height:350px;" alt="Manthan" style="width:50%">
      <div class="container">
        <h2>Mr. Manthan Raut</h2>
        <h4 class="title" style="color:white;">Full Stack Developer</h4>
        <p>He worked on the frontend and backend for making this website.</p>
        <h3 class="mail">Mail ID: manthanraut16@gmail.com</h3>
        <a href="https://www.facebook.com/manthan.raut.1297" class="fa fa-facebook"></a>
<a href="https://www.linkedin.com/in/manthan-raut-130a09185/" class="fa fa-linkedin"></a>
<a href="https://www.instagram.com/manthan_raut_never_give_up/" class="fa fa-instagram"></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imgs/akilesh.jpg" style="margin-left:5px; width:300px ;height:350px;" alt="Akilesh" style="width:50%">
      <div class="container">
        <h2>Mr. Akilesh Salunkhe</h2>
        <h4 class="title" style="color:white;">Backend Developer</h4>
        <p>He handled the database for this website</p>
        <h3 class="mail">Mail ID: akileshsalunkhe99@gmail.com</h3>
        <a href="https://www.facebook.com/profile.php?id=100010578181969" class="fa fa-facebook"></a>
<a href="https://www.linkedin.com/in/akilesh-salunkhe-570b45148/" class="fa fa-linkedin"></a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="imgs/shayantan.jpg" style="margin-left:5px; width:300px ;height:350px;" alt="shayantan" style="width:50%">
      <div class="container">
        <h2>Mr. Shayantan Santra</h2>
        <h4 class="title" style="color:white;">Website developer</h4>                                       
        <p>He gave ideas and worked on front end</p>
        <h3 class="mail">Mail ID: shayantan.santra@gmail.com</h3>                                                                 
                <a href="https://www.facebook.com/shayantan.santra?ref=br_rs" class="fa fa-facebook"></a>
                <a href="https://www.youtube.com/channel/UC6QJjXIGwOug_zDRdygHuXg/featured" class="fa fa-youtube"></a>
                <a href="https://www.instagram.com/warrior_shayantan/" class="fa fa-instagram"></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>