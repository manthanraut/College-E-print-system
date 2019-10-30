<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: http://localhost/College-E-print-system/admin_login.php');
  }
  if (isset($_POST['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: http://localhost/College-E-print-system/admin_login.php");
  }
?>
<?php include "conn.php"; ?>
<html>
<meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="keywords" content="footer, contact, form, icons" />
              <!-- Add icon library -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
              <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <head>
        <title><?php echo 'Hello '.$_SESSION['username']; ?></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/admin_demo.css">
    <style>
     
    body, html {
  height: 100%;
}
input[type=submit] {
    padding:5px 15px; 
    background:red;
    font-family:cortana;
    font-size:16px; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 10px;
    border-radius: 10px; 
}
.bg {
  /* The image used */
  background-image: url("coffee-cup.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
a:hover{
  color:red;
  background-color:white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  height:100px;
  overflow: hidden;
  background-color:#e60000;
  font-family:new time roman;
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
form.example input[type=text] {
  
  font-size: 17px;
  height:37px;
 margin-right:10px;
  border: 1px solid grey;
  float: left;
  width: 75%;
  border-radius:20px;
  background: #f1f1f1;
}

form.example button {
  width:35%;
  padding: 10px;
  margin-left:200px;
  background: #2196F3;
  color: white;
  height:37px;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

@media only screen and (max-width: 420px) {
  #searchfield{
border-radius:20px;
}
ul{
  height:auto;
}
#gadget{
border-radius:20px;
}
#files{

}
#logout{

}
}
input::placeholder {
  color: red;
  font-style:bold;
  color:black;
  opacity:1;
}

#searchfield{
  position:relative;
  float:right;
  width:auto;
  padding:10px;
margin-right:100px;
margin-top:20px;
}
#searchfield input[type="text"]
{
	border: none;
	border-bottom: 1px solid black;
	background-color:white;
	outline:none;
	color:black;
  font-size: 16px;
  font-family:Times;
  border-radius:20px;
}
.button{
  
    width: auto;
    height: auto;
    background: #FBF402;
    margin-left:10px;
  margin-top:18px;
  border:2px solid white;
    text-align: center;
    border-radius: 15px;
    color: black;
    padding: 15px 32px;
    font-family:Times;
}
.button:hover{
color:white;
background-color:red;
}

    </style>
    <script>
    function change(){
      document.getElementById('container').style.display="none";
      document.getElementById('result').style.display="block";
    }
    function change2(){
      document.getElementById('container').style.display="block";
      document.getElementById('result').style.display="none";
    }
    </script>
    </head>
    <body>
    <ul>
              <li><img src="imgs/a_icon.png" width="60" height="60" style="display:none;margin-top:16px;margin-left:20px;" class="d-inline-block align-top" alt="" ></li>
              <li id="ligadget"><a href="javascript:change()" class="button" id="gadget"><i class="fa fa-download" aria-hidden="true"></i> Download Gadget</a>
              <li id="lifiles"><a href="javascript:change2()" class="button" id="files">View Files</a>
             <li id="lilogout"><a class="button" href="admin_login.php?logout='1'" id="logout" style="margin-top:18px;margin-left:10px;"><i class="fa fa-sign-out" aria-hidden="true"></i>LogOut</a></li>
            
              <form class="example" autocomplete="off"  method="post">
              <div id="searchfield" >
  <input type="text" placeholder="  Enter Roll Number.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  </div>
</form>
        </ul>
          <?php 
          if(!isset($_POST['search'])) : ?>
  
            <?php 
          else : 
             $rollno=$_POST["search"]; 
             if($rollno==""):?>
              <?php 
              else :
              $results_array = array(); 
              $log_directory = 'doc/'.$rollno;
              if (is_dir($log_directory)) :
              
                      if ($handle = opendir($log_directory)) :
                      
                              //Notice the parentheses I added:
                              while(($file = readdir($handle)) !== FALSE) :
                              
                                      $results_array[] = $file;
                              endwhile;
                              closedir($handle);
                        endif; 
                endif;?>


<div id="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC 
                        <div class="profile-userpic">
                            <img src="imgs/default-user.png" class="img-responsive" alt="">
                        </div>
                         END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                            <?php 
                            $fullname="";
                            $rollno = mysqli_real_escape_string($conn, $_POST['search']);
                            $query = "SELECT * FROM student_info WHERE roll_no='$rollno'";
                            $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
    $fullname=$row["full_name"]; }
    else{
      echo '<script>alert("User has not registered yet");</script>';
      $message="";
    }
      ?>
                                <h4 style="text-transform:uppercase;"><?php echo $rollno;?></h4>
                                <?php 
                                if (mysqli_num_rows($result) == 1)
                                echo '<h3>'.$row['full_name'].'</h3>';
                                else
                                echo '<h3>'.$message.'</h3>';
                                ?>
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                
<form  method="post" action="deletefolder.php">
<h5 style="color:red;">Delete folder <i class="fa fa-trash " aria-hidden="true">: </i><input type="submit" name="delete" class="btn btn-danger btn-sm" value="<?php echo $rollno ;?>"></h5>
</form>
                        
                        <!-- END SIDEBAR BUTTONS -->
                    
                <div class="portlet light bordered">
                    <!-- STAT -->
                
                    <div>
                        <h4 class="profile-desc-title">About :</h4>
                        <?php 
                                if (mysqli_num_rows($result) == 1)
                                echo $row['full_name'];
                                else
                                echo '';
                                ?>
                        
                        <!-- <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span> -->
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-globe"></i>
                            <?php $query="select rait_id from student_info where roll_no='$rollno';";
                                  $result= mysqli_query($conn,$query);
                                  $row= mysqli_fetch_assoc($result);?>
                            <a href="<?php echo $row['rait_id'];?>"><?php echo $row['rait_id'];?></a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-google"></i>
                            <?php $query="select email from student_info where roll_no='$rollno';";
                                  $result= mysqli_query($conn,$query);
                                  $row= mysqli_fetch_assoc($result);?>
                            <a href="<?php echo $row['email'];?>"><?php echo $row['email'];?> </a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-phone"></i>
                            <?php $query="select mob_no from student_info where roll_no='$rollno';";
                                  $result= mysqli_query($conn,$query);
                                  $row= mysqli_fetch_assoc($result);?>
                            <p><?php echo $row['mob_no'];?></p>
                        </div>
   </div></div>                   
                                              
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">


              
            
              <?php //Output findings
              foreach($results_array as $value):
               //$file = $value;
                // echo '<div class="card border-primary mb-3" style="max-width: 18rem;">';
                if($value=="." || $value==".."):
                  continue;
                endif;
              
                echo "<a href='doc/$rollno/$value' class='card-link'><h4 style='color:blue;border: solid black;border-width:3px;
                width: 230px;border-radius:6px;padding:10px;font-family:cortana;background-color:white;'><i class='fa fa-file' aria-hidden='true'></i> $value</h4></a>";
              endforeach; 
            endif;
          endif;?>
                    </div>
                </div>
            </div>
        </div>
      
        <div id="result">
        <form class="example" autocomplete="off"  method="post">
        <div style="background-color:white;width:100%;height:100px;">
              <div id="searchfield" >
  <input type="text" placeholder="Enter month & year" style="width:74%;border:none;background-color:#E0E0D7;opacity:0.9;" name="year">
  <button type="submit"><i class="fa fa-search"></i></button>
  </div></div>
</form>
        <?php 
          if(!isset($_POST['year'])) : ?>
        
            <?php 
          else : 
            $year=$_POST["year"]; 
             if($year==""):?>
             
            
              <?php 
              else :
              $results_array = array(); 
              $log_directory = 'results/'.$year;
              if (is_dir($log_directory)) : 
                      if ($handle = opendir($log_directory)) :
                      
                              //Notice the parentheses I added:
                              while(($file = readdir($handle)) !== FALSE) :
                              
                                      $results_array[] = $file;
                              endwhile;
                              closedir($handle);
                        endif; 
                endif;?>

            <div>
                <div>
                    <div class="profile-sidebar" style="display:none;">
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                            </div>
                        </div>
                <div class="portlet light bordered">
                    <!-- STAT -->
                
                    <div>
                        <div class="margin-top-20 profile-desc-link">
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                        </div></div></div>                            
                    </div>
                </div>
                <div>
                    <div class="profile-content">
              <?php //Output findings
              foreach($results_array as $value):
               //$file = $value;
                // echo '<div class="card border-primary mb-3" style="max-width: 18rem;">';
                if($value=="." || $value==".."):
                  continue;
                endif;
              
                echo "<a href='results/$year/$value' target='_blank' class='card-link'><h4 style='color:blue;border: solid black;border-width:1px;
                width: 100%;border-radius:6px;padding:10px;font-family:cortana;background-color:white;'><i class='fa fa-file' aria-hidden='true'></i> $value</h4></a>";
              endforeach;
            endif;
            endif?>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script src="js/Bootstrap_tutorial.js"></script>

      </body>
        
</html>