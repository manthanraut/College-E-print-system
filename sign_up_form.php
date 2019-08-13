
<!DOCTYPE html>
<html>
    <head>
        <style>
            #message{
    display:none;
    background-color: #f1f1f1;
    color: black;
    position: fixed;
    padding: 20px;
    margin-top: 350px;
    width:400px;
    height:250px;
    margin-left:500px;
    border-radius:40px;
    opacity:.6;
  }
  #message p {
    padding: 10px 35px;
    font-size: 18px;
  }
  
  /* Add a green text color and a checkmark when the requirements are right */
  .valid {
    color: green;
  }
  
  .valid:before {
    position: relative;
    left: -35px;
    content: "✔";
  }
  
  /* Add a red text color and an "x" when the requirements are wrong */
  .invalid {
    color: red;
  }
  body{
    background-image:url('computer-laptop-macbook-2506947.jpg');
    background-size:cover;
    margin:0;
	padding:0;
    font-family:new time roman;
}
  .invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
  }
  *{
    margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: montserrat;
  box-sizing: border-box;
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
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <script>
      	function show1() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function show(obj) {
  var obj = document.getElementById('psw1');
  obj.type = "text";
}
function hide(obj) {
  var obj = document.getElementById('psw1');
  obj.type = "password";
}
            function validate(form) {
               // var myInput = document.getElementById("psw");
               password1=form.psw1.value;
               password2=form.psw2.value;
            var fname=document.getElementById('fname');
            var rollno =document.getElementById('rollno');
            var Email=document.getElementById('mailid');
            var mobno=document.getElementById('mob');
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
              // Validate lowercase letters
              var lowerCaseLetters = /[a-z]/g;
              
                  if(reg.test(Email.value) && /^\d{10}$/.test(mobno.value) && password1==password2 && (document.getElementById("rd1").checked || document.getElementById("rd2").checked)){
                  alert("Singed Up successfully!");
                  return true;}
              else{
                  alert("Incorrect Data.Please Check again the data entered!")
                  return false; }}
            </script>
    <title>Registration form</title>
    </head>
    <body>
            <div class="topnav">
                    <h3><a href="http://localhost/webapp/home.php" style="float:right;">Home</a></h3>
					<h3><a href="http://localhost/webapp/verified.php" style="float:right;">Sign Up</a></h3>
                    <h3><a href="http://localhost/webapp/signin.php" style="float:right;">Sign In</a></h3>
					
                  </div>
        <form action="http://localhost/webapp/server.php" method="POST" onsubmit="return validate(this)" autocomplete="off">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left" style="text-align:center;">Registration Form</h3>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                            <label class="label col-md-2 control-label">Full Name </label>
                                <input type="text" class="form-control" name="fullname" id='fname' placeholder="fullname" style="margin-left:30px;" required>
                    </div>
                <div class="row">
                        <label class="label col-md-2 control-label">Roll No.: </label>
                            <input type="text" class="form-control" name="rollno" id="rollno" maxlength=8 style="margin-left:43px;" placeholder="Roll No." required>
                </div>
                <div class="row">
                        <label class="label col-md-2 control-label" style="margin-top:10px;">Gender: </label>
                        <div class="col-md-10" style="margin-left:120px;margin-top:0px;">
                            <input type="radio" id="rd1" name="gender" value="male" style="margin-left:30px;"><small>Male</small>
                            <input type="radio" id="rd2" name="gender" value="female" style="margin-left:20px;"><small>Female</small>
                        </div>
                </div>
                <div class="row">
                    <label class="label col-md-2 control-label">Rait Mail ID: </label>
                        <input type="Email" class="form-control" name="raitmail" style="margin-left:10px;" id='raitmailid' placeholder="Rait mail id" required>
            </div>
                <div class="row">
                        <label class="label col-md-2 control-label">E-mail: </label>
                            <input type="Email" class="form-control" name="Email" style="margin-left:55px;" id='mailid' placeholder="Email" required>
                </div>
                <div class="row">
                        <label class="label col-md-2 control-label">Mobile No.: </label>
                            <input type="tel" class="form-control" name="num" style="margin-left:15px;" id='mob' placeholder="Mobile No." maxlength=10 required>
                </div>
                <div class="row">
                    <label class="label col-md-2 control-label">Password: </label>
                        <input type="password" class="form-control" id="psw1" name="psw1" style="margin-left:30px;" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="password" maxlength=20 required>
                        <img src="icon.png" style="border-radius:10px;margin-left:10px;width:30px;height:30px;" onmouseover="show();" onmouseout="hide();" />
                      </div>
            <div class="row">
                <label class="label col-md-2 control-label">Confirm </label><br><label class="label col-md-2 control-label" style="margin-top:0px;">Password: </label>
                    <input type="password" class="form-control" id="psw2" name="psw2" style="margin-left:25px;" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="confirm password" maxlength=20 required>
        </div>
                <button type="submit" value="Submit" name="reg_user" id="btn1">Submit</button>
                <button type="reset" value="Reset" id="btn2">Reset</button>
            </div>
        </div>
        </div>
        </form>
        <div id="message">
            <h3 style="color:black;">Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
          <script>
                var passwd = document.getElementById("psw1");
                var confirm_passwd=document.getElementById("psw2");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");
                
                // When the user clicks on the password field, show the message box
                passwd.onfocus = function() {
                  document.getElementById("message").style.display = "block";
                }
                
                // When the user clicks outside of the password field, hide the message box
                passwd.onblur = function() {
                  document.getElementById("message").style.display = "none";
                }
                
                // When the user starts to type something inside the password field
                passwd.onkeyup = function() {
                  // Validate lowercase letters
                  var lowerCaseLetters = /[a-z]/g;
                  if(passwd.value.match(lowerCaseLetters)) {  
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                  } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                  }
                  
                  // Validate capital letters
                  var upperCaseLetters = /[A-Z]/g;
                  if(passwd.value.match(upperCaseLetters)) {  
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                  } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                  }
                
                  // Validate numbers
                  var numbers = /[0-9]/g;
                  if(passwd.value.match(numbers)) {  
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                  } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                  }
                  
                  // Validate length
                  if(passwd.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                  } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                  }
                }</script>
    </body>
</html> 