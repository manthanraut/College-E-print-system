<!DOCTYPE html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
<style>
*{
    margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: montserrat;
  box-sizing: border-box;
}

body{
    background-image:url('imgs/computer-laptop-macbook-2506947.jpg');
    background-size:cover;
    margin:0;
	padding:0;
    font-family:new time roman;
}
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change color on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
form{
    color:white;
}
.container{
    width: 500px;
  height: 600px;
  padding: 40px 40px;
  border-radius: 10px;
  position: absolute;
  left: 20%;
  top:50%;
  transform: translate(-50%,-50%);
}
h1{
    font-size:40px;
    color:white;
    margin-top:250px;
}
p{
    font-size:17px;
    color:black;
}
h3{
    font-size:25px;
    color:white;
}
.col-md-5{
    margin-top:80px;
    box-shadow: -1px 1px 60px 10px black;
    background: rgba(0,0,0,0.4);
}
.col-md-10{
    margin-left:60px;
    margin-top:20px;
    top:0px;
    bottom:40px;
}
.col-md-2{
    margin-left:20px;
    margin-top:20px;
    top:0px;
}
.label{
    font-weight:normal;
    margin-top:15px;
    padding-left:10px;
    color:white;
    font-sizE:19px;
}
#btn1 {
    background-color: #19cae9;
    border: none;
    color: white;
    border-radius:15px;
    padding: 16px 32px;
    text-align: center;
    font-size: 18px;
    margin: 4px 2px;
    opacity: 0.6;
    margin-top:20px;
    margin-left:145px;
    transition: 0.3s;
  }
  
  #btn1:hover {opacity: 1}
  #btn2 {
    background-color: #f4511e;
    border: none;
    color: white;
    border-radius:15px;
    padding: 16px 32px;
    text-align: center;
    font-size: 18px;
    margin: 4px 2px;
    opacity: 0.6;
    transition: 0.3s;
  }
  
  #btn2:hover {opacity: 1}
.form-control{
    background: transparent;
    border-radius: 0px;
    border:0px;
    border-bottom: 1px solid white;
    font-size:18px;
    height:40px;
    color:white;
}
input[type="checkbox"]{
    margin-top:15px;
    width:15px;
    height:15px;
}
small{
    font-size:18px;
    color:white;

}
</style>
    <title>Authentication form</title>
    </head>
    <body>
            <div class="topnav">
                    <h3><a href="http://localhost/webapp/home.php" style="float:right;">Home</a></h3>
                  </div>
        <form action="http://localhost/webapp/validate1.php" method="POST" autocomplete="off">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left" style="text-align:center;">USER Authenticity..</h3>
                    </div>
                    </div>
                    <hr>
                <div class="row">
                        <label class="label col-md-2 control-label">Roll No.: </label>
                            <input type="text" class="form-control" name="rollno" id="rollno" maxlength=8 style="margin-left:43px;" placeholder="Roll No." required>
                </div>
    
                <div class="row">
                    <label class="label col-md-2 control-label">Rait Mail ID: </label>
                        <input type="Email" class="form-control" name="raitmail" style="margin-left:10px;" id='raitmailid' placeholder="Rait mail id" required>
            </div>
                <button type="submit" value="Submit" id="btn1">Submit</button>
                <button type="reset" value="Reset" id="btn2">Reset</button>
            </div>
        </div>
        </div>
        </form>
    </body>
</html>