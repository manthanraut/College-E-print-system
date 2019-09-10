<!DOCTYPE html>
<html>
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
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;
width:100%;
}
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
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
document.getElementById('ct').innerHTML = String(x).slice(0,25);
document.getElementById('ct').style.fontSize='20px';
document.getElementById('ct').style.color='white';
display_c();
 }
</script>
</head>

<body onload=display_ct();>
<ul>
  <li><a href="http://localhost/College-E-print-system/home.php" style="float:right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li><a href="http://localhost/College-E-print-system/verified.php" style="float:right;"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
  <li><a href="http://localhost/College-E-print-system/signin.php" style="float:right;"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
  <li><a href="http://localhost/College-E-print-system/admin_login.php" style="float:right;"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
  <li><a href="http://localhost/College-E-print-system/contacts.php" style="float:right;"><i class="fa fa-address-book" aria-hidden="true"></i> Contacts</a></li>
  <span id='ct' style="float:right;background-color:black;color:white;box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.6);margin-top:15px;padding:4px;border-radius:16px;margin-right:20px;"></span>
</ul>

<div class="w3-content w3-section" style="width:100%;height: 100%;">

  <img class="mySlides" src="imgs/dyp1.jpg" style="width:100%;border-radius:20px;box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);">
  <img class="mySlides" src="imgs/dyp3.jpg" style="width:100%;border-radius:20px;box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);">
  <img class="mySlides" src="imgs/dyp4.jpg" style="width:100%;border-radius:20px;box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);">
  <img class="mySlides" src="imgs/dyp5.jpg" style="width:100%;border-radius:20px;box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);">
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
<script>
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
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

</html>
