<?php 
	session_start();

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

		// form validation: ensure that the form is correctly filled
		//if (empty($username)) { array_push($errors, "Username is required"); }
		//if (empty($email)) { array_push($errors, "Email is required"); }
		//if (empty($password)) { array_push($errors, "Password is required"); }

		//if ($password_1 != $password_2) {
		//	array_push($errors, "The two passwords do not match");
		//}

		// register user if there are no errors in the form
		//if (count($errors) == 0) {
			//$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO student_info (full_name,roll_no,gender,rait_id,email,mob_no,password) VALUES('$fullname', '$rollno', '$gender','$raitmail','$email','$mobno','$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: http://localhost/College-E-print-system/home.php');
		}

	// ... 

	// LOGIN USER
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
        header( 'Location: http://localhost/College-E-print-system/userpage.php' );
    }
    else{
        header('Location: http://localhost/College-E-print-system/signin.php');
        }
}
$flag=0;

if (isset($_POST['submitadmin'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['adminpsw']);
	if ($username=='admin' && $password=='Admin123'){
		header( 'Location: http://localhost/abc.html' );
	}
	else{
		header( 'Location: http://localhost/College-E-print-system/admin_login.php' );
	}
}
?>