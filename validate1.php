   <?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "thechamp16");
define("DB_DATABASE", "e_print_system");
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$message="";
if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM student_rait_data WHERE roll_no='" . $_POST["rollno"] . "' and rait_id = '". $_POST["raitmail"]."'");
	$count  = mysqli_num_rows($result);
	#$query=mysqli_query($conn,"select * from student_info where roll_no='" . $_POST["rollno"] . "' or rait_id='" . $_POST["raitmail"]."'");
	#$count1=mysqli_num_rows($query);
	if($count==0) {
		header( 'Location: http://localhost/webapp/verified.php' );
	} else {
		#if ($count1==0){
	header( 'Location: http://localhost/webapp/sign_up_form.php' );}
	#else{
		#header( 'Location: http://localhost/webapp/verified.php' );
#	}
}

?>