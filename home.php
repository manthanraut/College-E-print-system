<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="keywords" content="footer, contact, form, icons" />
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript">
  var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
  </script>
<style>
.mySlides 
{display:none;}
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("wall1.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height:140px;
  padding:20px;
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

</style>
</head>
<body>
<ul>
  <li><a href="http://localhost/College-E-print-system/home.php" style="float:right;">Home</a></li>
  <li><a href="http://localhost/College-E-print-system/verified.php" style="float:right;">Sign Up</a></li>
  <li><a href="http://localhost/College-E-print-system/signin.php" style="float:right;">Sign In</a></li>
  <li><a href="http://localhost/College-E-print-system/admin_login.php" style="float:right;">Admin</a></li>
  <li><a href="http://localhost/College-E-print-system/contacts.php" style="float:right;">Contacts</a></li>
</ul>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="imgs/dyp1.jpg" style="width:100%">
  <img class="mySlides" src="imgs/dyp2.jpg" style="width:100%">
  <img class="mySlides" src="imgs/dyp3.jpg" style="width:100%">
  <img class="mySlides" src="imgs/dyp4.jpg" style="width:100%">
  <img class="mySlides" src="imgs/dyp5.jpg" style="width:100%">
</div>
<footer class="footer-distributed" style="opacity:.6;">

            <div class="footer-right">
              <a href="https://www.linkedin.com/in/akilesh-salunkhe-570b45148/" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a href="https://github.com/manthanraut" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.youtube.com/channel/UC6QJjXIGwOug_zDRdygHuXg/featured" target="_blank"><i class="fa fa-youtube"></i></a>

      
            </div>
      
            <div class="footer-left">
      
              <p class="footer-links">
                <a href="http://localhost/College-E-print-system/home.php">Home</a>
                ~
                <a href="http://localhost/College-E-print-system/signin.php">  Sign In</a>
                ~
                <a href="http://localhost/College-E-print-system/verified.php">  Sign Up</a>
               
              </p>
      
              <p>Company Name : SAM &copy; 2019</p>
            </div>
      
          </footer>

</body>
</html>
