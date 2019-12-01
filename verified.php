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
  font-family: cortana;
  box-sizing: border-box;
}
ul {
  list-style-type: none;
  margin: 0;
  padding-bottom:10px;
  overflow: hidden;
  background-color:#e60000;
  font-family:Cortana;
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
  height:auto;
  padding-bottom:60px;
  padding-left:30px;
  padding-right:30px;
  padding-top:50px;
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
.user
{
	width:120px;
	height:120px; 
	overflow:hidden;
	position:absolute;
	top:calc(-100px/2);
	left:calc(50% - 50px);
	border-radius:20%;
}
/* Samsung Galaxy S5 Portrait */    
@media only screen  and  (max-width: 430px) {  
  .container{
  box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
  position:absolute;
	top:72%;
	left:50%;
	transform: translate(-50%, -50%);
	width:300px;
  height:auto;
  font-family:cortana;
  padding-bottom:60px;
  padding-left:30px;
  padding-right:30px;
  padding-top:50px;
	box-sizing: border-box;
	background-color:white;
}
}
@media only screen  and (max-width: 349px) { 
.container{
  top:75%;
  height:450px;
}
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
display_c();
 }
</script>
    <title>Authentication form</title>
    </head>
    <body  onload=display_ct();>
    <ul>
  <li><a href="index.html" style="float:right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li><a href="signin.php" style="float:right;"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
  <span id='ct' style="float:right;background-color:white;color:black;box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.6);border:2px solid black;margin-top:15px;padding:4px;border-radius:16px;margin-right:20px;"></span>

</ul>
        <form action="validate1.php" method="POST" autocomplete="off">
        <div class="container">
        
            <div class="row">
               
                <div class="row">
                    <div>
                        <h3 class="text-left" style="text-align:center;background: -webkit-linear-gradient(white,red,red);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-family:">USER verification</h3>
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
                <button type="submit" value="Submit" id="btn1" style="font-size:25px;">Submit</button>
                <button type="reset" value="Reset" id="btn2" style="font-size:25px;">Reset</button>
            </div>
        </div>
        </div>
        </form>
    </body>
</html>