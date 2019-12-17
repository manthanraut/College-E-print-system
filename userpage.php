<?php 
  session_start(); 
  if (!isset($_SESSION['fullname'])) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: signin.php');
   }
  if (isset($_POST['logout'])) {
  	session_destroy();
  	unset($_SESSION['fullname']);
	echo '<script>alert("bye")</script>';
  	#header("location: signin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="keywords" content="footer, contact, form, icons" />
              <!-- Add icon library -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
              <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <style>
   
    * {
	box-sizing:border-box;
}
@media screen and (max-width:800px) {
  .left, .main, .right {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	width: 100%;
	color: white;
	background: crimson;
	text-align: center;
	padding: 20px;
}
form, .content {
	width: 100%;
	margin: 0px auto;
  padding: 20px;
  text-align:right;
  color:black;
	border: 1px solid #B0C4DE;
  background: white;
  opacity:.7;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius:15px;
  font-size:25px;
}
a:hover, a:active {
  background-color: red;
  text-decoration: none;
  color:white;
}
@media only screen and (max-width:420px){
  .header {
	width: 100%;
	color: white;
	background: crimson;
  padding-right: 0px;
  padding:10px;
}
#name{
  font-family:Times;
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
	<title><?php echo 'Hello '.$_SESSION['fullname']; ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body  onload=display_ct();>

<div class="header">

  <span id='ct' style="float:left;background-color:white;color:black;border:2px solid black;margin-top:30px;box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.6);padding:4px;border-radius:16px;margin-right:20px;"></span>

	<p id="name" align="right" style="font-size:30px;margin-right:50px;">Welcome <strong><?php echo $_SESSION['fullname']; ?></strong></p>
  <p align="right" style="margin-right:50px;"> <a id="logout" align="right" href="signin.php?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> LogOut</a> </p>
  </div>

<br /><br />
  <div class="container">
   <h2 align="center" style="font-family:Times;">Make a folder by your Roll No. and Upload Your files inside it </a></h2>
   <br />
   <div align="right">
    <button type="button" name="create_folder" id="create_folder" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Create</button>
   </div>
   <br />
   <div class="table-responsive" id="folder_table">
    
   </div>
  </div>
 </body>
</html>

<div id="folderModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="change_title">Create Folder</span></h4>
   </div>
   <div class="modal-body">
    <p>Enter Folder Name
    <input type="text" name="folder_name" id="folder_name" class="form-control" /></p>
    <br />
    <input type="hidden" name="action" id="action" />
    <input type="hidden" name="old_name" id="old_name" />
    <input type="button" name="folder_button" id="folder_button" class="btn btn-info" value="Create" />
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<div id="uploadModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Upload File</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="upload_form" enctype='multipart/form-data'>
     <p>Select File
     <input type="file" name="upload_file" /></p>
     <br/>
     <input type="hidden" name="hidden_folder_name" id="hidden_folder_name" />
     <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="filelistModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">File List</h4>
   </div>
   <div class="modal-body" id="file_list">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script>
$(document).ready(function(){
 
 load_folder_list();
 
 function load_folder_list()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#folder_table').html(data);
   }
  });
 }
 
 $(document).on('click', '#create_folder', function(){
  $('#action').val("create");
  $('#folder_name').val('doc/');
  $('#folder_button').val('Create');
  $('#folderModal').modal('show');
  $('#old_name').val('');
  $('#change_title').text("Create Folder");
 });
 
 $(document).on('click', '#folder_button', function(){
  var folder_name = $('#folder_name').val();
  var old_name = $('#old_name').val();
  var action = $('#action').val();
  if(folder_name != '')
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{folder_name:folder_name, old_name:old_name, action:action},
    success:function(data)
    {
     $('#folderModal').modal('hide');
     load_folder_list();
     alert(data);
    }
   });
  }
  else
  {
   alert("Enter Folder Name");
  }
 });
 
 $(document).on("click", ".update", function(){
  var folder_name = $(this).data("name");
  $('#old_name').val(folder_name);
  $('#folder_name').val(folder_name);
  $('#action').val("change");
  $('#folderModal').modal("show");
  $('#folder_button').val('Update');
  $('#change_title').text("Change Folder Name");
 });
 
 $(document).on("click", ".delete", function(){
  var folder_name = $(this).data("name");
  var action = "delete";
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{folder_name:folder_name, action:action},
    success:function(data)
    {
     load_folder_list();
     alert(data);
    }
   });
  }
 });
 
 $(document).on('click', '.upload', function(){
  var folder_name = $(this).data("name");
  $('#hidden_folder_name').val(folder_name);
  $('#uploadModal').modal('show');
 });
 
 $('#upload_form').on('submit', function(){
  $.ajax({
   url:"upload.php",
   method:"POST",
   data: new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
   { 
    load_folder_list();
    alert(data);
   }
  });
 });
 
 $(document).on('click', '.view_files', function(){
  var folder_name = $(this).data("name");
  var action = "fetch_files";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action, folder_name:folder_name},
   success:function(data)
   {
    $('#file_list').html(data);
    $('#filelistModal').modal('show');
   }
  });
 });
 
 $(document).on('click', '.remove_file', function(){
  var path = $(this).attr("id");
  var action = "remove_file";
  if(confirm("Are you sure you want to remove this file?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{path:path, action:action},
    success:function(data)
    {
     alert(data);
     $('#filelistModal').modal('hide');
     load_folder_list();
    }
   });
  }
 });
$(document).on('blur', '.change_file_name', function(){
  var folder_name = "doc/".$(this).data("folder_name");
  var old_file_name = $(this).data("file_name");
  var new_file_name = $(this).text();
  var action = "change_file_name";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{folder_name:folder_name, old_file_name:old_file_name, new_file_name:new_file_name, action:action},
   success:function(data)
   {
    alert(data);
   }
  });
 });
 
});
</script>

</body>
</html>