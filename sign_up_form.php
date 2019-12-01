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
    margin-top: 320px;
    width:400px;
    height:250px;
    margin-left:860px;
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
    background-color:#e6e6e6;
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

#btn1 {
    background-color: #19cae9;
    border: none;
    color: white;
    border-radius:15px;
    text-align: center;
    font-size: 18px;
    opacity: 0.6;
    transition: 0.3s;
  }
  
  #btn1:hover {opacity: 1}
  #btn2 {
    background-color: #f4511e;
    border: none;
    color: white;
    border-radius:15px;
    text-align: center;
    font-size: 18px;
    opacity: 0.6;
    transition: 0.3s;
  }
  
  #btn2:hover {opacity: 1}
.form-control{
    background: transparent;
    border-radius: 0px;
    border:0px;
    border-bottom: 2px solid black;
    font-size:18px;
    height:30px;
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

    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#e60000;
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
.signup{
position:absolute;
box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
transform: translate(-50%, -50%);
width:350px;
  top:55%;
  left:50%;
  height:550px;
  padding:30px 40px;
  box-sizing: border-box;
  background-color:white;
  border-radius:16px;
   }

   @media only screen and (max-width: 420px) {
    .signup{
position:absolute;
box-shadow: 0 16px 30px 0 rgba(0, 0, 0, 0.6);
transform: translate(-50%, -50%);
width:330px;
  top:80%;
  left:50%;
  height:auto;
  padding:30px 40px;
  box-sizing: border-box;
  background-color:white;
  border-radius:16px;
  margin-bottom:50px;
   }
  }
  @media only screen  and (max-width: 349px) { 
  .signup{
    top:78%;
width:330px;
  }
  }
  
      </style>
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <script>
 
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
    <title>Registration form</title>
    </head>
    <body  onload=display_ct();>
    <ul>
  <li><a href="index.html" style="float:right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li><a href="signin.php" style="float:right;"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
  <span id='ct' style="float:right;background-color:white;color:black;box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.6);border:2px solid black;margin-top:15px;padding:4px;border-radius:16px;margin-right:20px;"></span>
</ul>
        <form action="server.php" method="POST" onsubmit="return validate(this)" autocomplete="off">
        <div class="signup">
            
            <div class="row">
              
                    <div>
                        <h3 class="text-left" style="text-align:center;background: -webkit-linear-gradient(yellow,red);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Registration Form</h3>
                    </div>
                  
                    <hr>
                    <div class="row">
                           
                                <input type="text" class="form-control" name="fullname" id='fname' placeholder="Enter fullname" style="border-bottom: 2px solid black;width:100%;color:black;" required>
                    </div>
                <div c
                
                
                
                lass="row">
                       
                            <input type="text" class="form-control" name="rollno" id="rollno" maxlength=8 style="border-bottom: 2px solid black;color:black;width:100%;" placeholder="Enter Roll No." required>
                </div>
                <div class="row">
                <br>
                        <label class="label control-label" style="color:black;margin-right:20px;">Gender: </label>
                    
                            <input type="radio" id="rd1" name="gender" value="male" ><small style="color:black;"> Male</small>
                            <input type="radio" id="rd2" name="gender" value="female"><small style="color:black;"> Female</small>
                  
                </div>
                <div class="row">
                   
                        <input type="Email" class="form-control" name="raitmail" style="color:black;width:100%;border-bottom: 2px solid black;" id='raitmailid' placeholder="Enter Rait mail id" required>
            </div>
                <div class="row">
                       
                            <input type="Email" class="form-control" name="Email" style="color:black;width:100%;border-bottom: 2px solid black;" id='mailid' placeholder="Enter Email" required>
                </div>
                <div class="row">
                        
                            <input type="tel" class="form-control" name="num" style="color:black;width:100%;border-bottom: 2px solid black;" id='mob' placeholder="Enter Mobile No." maxlength=10 required>
                </div>
                <div class="row">
                    
                        <input type="password" class="form-control" id="psw1" name="psw1" style="width:100%;color:black;border-bottom: 2px solid black;" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter your password" maxlength=20 required>
                        
                      
                      </div>
                  
            <div class="row"9>
            
                    <input type="password" class="form-control" id="psw2" name="psw2" style="width:100%;color:black;border-bottom: 2px solid black;" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm password" maxlength=20 required>
        </div>
                <button type="submit" value="Submit" name="reg_user" id="btn1" style="width:100%;margin-left:0px;">Submit</button>
                <button type="reset" value="Reset" id="btn2" style="width:100%;">Reset</button>
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