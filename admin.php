<?php include "conn.php"; ?>
<html>
    <head>
        <title>Admin Page</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/admin_demo.css">

    <style>
    body, html {
  height: 100%;
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
    </style>
    </head>
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FA1515;" ><!--style="background-color:#ea550e"-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="http://localhost/College-E-print-system-master/admin.php">
                <img src="imgs/a_icon.png" width="40" height="40" class="d-inline-block align-top" alt="" >
        
              </a>
            <!--<a class="navbar-brand" href="#">ADMIN</a>-->
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/College-E-print-system-master/admin.php" style="font-size:20px;color:white;margin-bottom:10px;"><h3>Home</h3> <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>-->
              </ul>
              <form class="form-inline my-lg-1 col-md-4" method="POST" autocomplete="off">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Enter Roll no. to search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:black;background-color:#65FA15;">Search</button>
              </form>
            </div>
          </nav>
          <?php 
          if(!isset($_POST['search'])) : ?>
            Enter roll no
            
            <?php 
          else : 
             $rollno=$_POST["search"]; 
             if($rollno==""):?>
                Enter roll no
            
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


<div class="container">
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
      $message="User ".$rollno." has not yet registered";
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
                
<form  method="post" action="http://localhost/College-E-print-system/deletefolder.php">
<h5 style="color:red;">Delete folder : <input type="submit" name="delete" class="btn btn-danger btn-sm" value="<?php echo $rollno ;?>"></h5>
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
                                echo '<h3>There does not exists any record</h3>';
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
                            <i class="fa fa-twitter"></i>
                            <?php $query="select email from student_info where roll_no='$rollno';";
                                  $result= mysqli_query($conn,$query);
                                  $row= mysqli_fetch_assoc($result);?>
                            <a href="<?php echo $row['email'];?>"><?php echo $row['email'];?> </a>
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
                width: 230px;border-radius:6px;font-family:cortana;background-color:white;'>$value</h4></a>";
              endforeach; 
            endif;
          endif;?>
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