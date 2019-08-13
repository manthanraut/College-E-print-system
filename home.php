<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, contact, form, icons" />
  <link rel="stylesheet" href="css/style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <title>
        Home Page
    </title>
<style>
  #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height:120px;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropbtn {
  background-color: #3498DB;
  color:black;
  padding: 16px;
  font-size: 16px;
  border: none;
  border-radius: 15px;
}
.dropup:hover .dropup-content {
  display: block;
}

.dropup {
  position: relative;
  display: inline-block;
}

.dropup-content {
  display: none;
  color:black;
  position: relative;
  background-color: #f1f1f1;
  min-width: 160px;
  bottom: 50px;
  z-index: 1;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

</style>
</head>
<body>
    <div class="navbar">
        <div class="container">
          <div class="navbar_links">
            <ul class="menu">
              <li><h3><a href="http://localhost/webapp/home.php">Home</a></h3></li>
              <li><h3><a href="http://localhost/webapp/verified.php">Sign Up</a></h3></li>
              <li><h3><a href="http://localhost/webapp/signin.php">Sign In</a></h3></li>
              <li><h3><a href="http://localhost/webapp/admin_login.php" style="float:right;">Admin</a></h3></li>
             
            </ul>
          </div>
        </div>
      </div>
      <video playsinline autoplay muted loop id="myVideo">
          <source src="imgs/tech.mp4" type="video/mp4">
          </video>
          <div id="intro" style="position:fixed;color:white;margin-left:220px;margin-top:100px;">
            <h1 style="font-size:30px;">We Help to save your precious time by make your printing job easy</h1><br>
            <div class="dropup">
              <button class="dropbtn" style="margin-left:300px;">Click me to view procedure</button>
              <div class="dropup-content" style="margin-left:300px;">
                <li>Sign Up If not registered</li>
                <li>Sign In </li>
                <li>Upload your documents</li>
                <li>Collect your documents from Xerox center</li>
          
              </div>
            </div>
      
          </div>
          <footer class="footer-distributed" style="opacity:.6;">

            <div class="footer-right">
              <a href="https://www.linkedin.com/in/akilesh-salunkhe-570b45148/" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a href="https://github.com/manthanraut" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.youtube.com/channel/UC6QJjXIGwOug_zDRdygHuXg/featured" target="_blank"><i class="fa fa-youtube"></i></a>

      
            </div>
      
            <div class="footer-left">
      
              <p class="footer-links">
                <a href="http://localhost/webapp/home.php">Home</a>
                ~
                <a href="http://localhost/webapp/signin.php">  Sign In</a>
                ~
                <a href="http://localhost/webapp/verified.php">  Sign Up</a>
                ~
                <a href="http://localhost/webapp/contact.php">  Contact</a>
              </p>
      
              <p>Company Name : SAM &copy; 2019</p>
            </div>
      
          </footer>
      
         
</body>
</html>
