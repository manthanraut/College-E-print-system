   <?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "thechamp16");
define("DB_DATABASE", "e_print_system");
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$message="";
$raitmail=mysqli_real_escape_string($conn,$_POST['raitmail']);
if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM student_rait_data WHERE roll_no='" . $_POST["rollno"] . "' and rait_id = '". $_POST["raitmail"]."'");
	$count  = mysqli_num_rows($result);
	
	if($count==0) {
		header( 'Location: verified.php' );
	} else {
		$_SESSION['raitmail'] = $raitmail;
		#if ($count1==0){
	header( 'Location: sign_up_form.php' );}
	
}

?>