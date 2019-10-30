<?php 
	session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
	// variable declaration
	$fullname = "";
$rollno = "";
$gender="";
$raitmail="";
$email="";
$mobno="";
$password="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "thechamp16");
define("DB_DATABASE", "e_print_system");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $rollno = mysqli_real_escape_string($db, $_POST['rollno']);
    $gender=mysqli_real_escape_string($db,$_POST['gender']);
    $raitmail=mysqli_real_escape_string($db,$_POST['raitmail']);
    $email=mysqli_real_escape_string($db,$_POST['Email']);
    $mobno=mysqli_real_escape_string($db,$_POST['num']);
    $password = mysqli_real_escape_string($db, $_POST['psw1']);
			$query = "INSERT INTO student_info (full_name,roll_no,gender,rait_id,email,mob_no,password) VALUES('$fullname', '$rollno', '$gender','$raitmail','$email','$mobno','$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
		header('location: index.html');
		}

	// 

	// LOGIN 
	if (isset($_POST['login_user'])) {
	    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['passwd']);
	$query = "SELECT * FROM student_info WHERE email='$email' AND password='$password'";
	$rollno="SELECT roll_no FROM student_info WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
	$getrollno="select full_name from student_info where email='$email'";
	$result=mysqli_query($db,$getrollno);
    if (mysqli_num_rows($results) == 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['fullname']=$row["full_name"];
	  #$_SESSION['fullname']=$fullname;
	  $_SESSION['email']=$email;
	  $_SESSION['rollno']=$rollno;
      $_SESSION['success'] = "You are now logged in";
        header( 'Location: userpage.php' );
    }
    else{
        header('Location: signin.php');
        }
}
$flag=0;

if (isset($_POST['submitadmin'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['adminpsw']);
	if ($username=='admin' && $password=='Admin123'){
		$_SESSION['username']=$username;
		header( 'Location: admin.php' );
	}
	else{
		header( 'Location: admin_login.php' );
	}
}
if (isset($_POST['resetpsw'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$que1="SELECT full_name,password FROM student_info WHERE email='$email'";
	$solution = mysqli_query($db, $que1);
	$row = mysqli_fetch_assoc($solution);
	$url="verified.php";
	$_SESSION['fullname']=$row["full_name"];
	$_SESSION['password']=$row["password"];
	try{
		#Server settings
	                   # Enable verbose debug output
		$mail->isSMTP();                                            # Set mailer to use SMTP
		$mail->Host       = 'smtp.gmail.com';  # Specify main and backup SMTP servers
		$mail->SMTPAuth   = true;                                   # Enable SMTP authentication
		$mail->Username   = 'manthanraut16@gmail.com';                     # SMTP username
		$mail->Password   = 'Thetruelegend16';                               # SMTP password
		$mail->SMTPSecure = 'tls';                                  # Enable TLS encryption, `ssl` also accepted
		$mail->Port       = 587;                                    # TCP port to connect to
	
		#Recipients
		$mail->setFrom('manthanraut16@gmail.com', 'Manthan');
		$mail->addAddress($email, $_SESSION['fullname']);     # Add a recipient
	   if($_SESSION['fullname']=="" || $_SESSION['password']==""){
	
		# Content
		$mail->isHTML(true);                                  # Set email format to HTML
		$mail->Subject = 'College E-print system Password manager';
		$mail->Body    = '<h2>Sorry ! but you have not registered yet</h2><br><a href="' . $url . '">' . $url . '</a>';
		
	   }else{
		$mail->isHTML(true);                                  # Set email format to HTML
		$mail->Subject = 'College E-print system Password manager';
		$mail->Body    = '<b>Dear ' . $_SESSION['fullname'] . '</b><br><p>We received a password forgot request from you.Your password is</p><br><h3>'.$_SESSION['password'].'</h3>';
	   }
	   $mail->AltBody = 'Password forgot request';
	
		$mail->send();
		header('Location: signin.php');
} catch (Exception $e) {
    header( 'Location: step1.php' );
}}