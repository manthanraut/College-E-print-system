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
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
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
  font-size:25px;

}

body{

    background-size:cover;
    margin:0;
    padding:0;
    background-color:#e6e6e6;
    font-family:new time roman;
  
}


.container{
  box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
  position:absolute;
	top:55%;
	left:50%;
	transform: translate(-50%, -50%);
	width:350px;
	height:450px;
	padding:80px 40px;
	box-sizing: border-box;
	background-color:white;
 
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
    color:black;
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
    transition: 0.3s;
    width:100%;
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
    transition: 0.3s;
    width:100%;
  }
  
  #btn2:hover {opacity: 1}
.form-control{
    background: transparent;
    border-radius: 0px;
    border:0px;
    border-bottom: 1px solid black;
    font-size:18px;
    height:40px;
    color:black;

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
    <ul>
  <li><a href="http://localhost/College-E-print-system/home.php" style="float:right;">Home</a></li>
  <li><a href="http://localhost/College-E-print-system/signin.php" style="float:right;">Sign In</a></li>
  <li><a href="http://localhost/College-E-print-system/contacts.php" style="float:right;">Contacts</a></li>
</ul>
        <form action="http://localhost/College-E-print-system/validate1.php" method="POST" autocomplete="off">
        <div class="container">
            <div class="row">
               
                <div class="row">
                    <div>
                        <h3 class="text-left" style="text-align:center;background: -webkit-linear-gradient(white,red,red);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">USER verification</h3>
                    </div>
            
                    <hr>
                    <br><br>
                <div class="row">
                        
                            <input type="text" class="form-control" name="rollno" id="rollno" maxlength=8 style="width:100%;" placeholder="Enter Roll No." required>
                </div>
    <br><br>
                <div class="row">
                   
                        <input type="Email" class="form-control" name="raitmail" style="width:100%;" id='raitmailid' placeholder="Enter Rait mail id" required>
            </div>
                <button type="submit" value="Submit" id="btn1">Submit</button>
                <button type="reset" value="Reset" id="btn2">Reset</button>
            </div>
        </div>
        </div>
        </form>
    </body>
</html>