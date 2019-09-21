<?php
include 'server.php';
function format_folder_size($size)
{
 if ($size >= 1073741824)
 {
  $size = number_format($size / 1073741824, 2) . ' GB';
 }
    elseif ($size >= 1048576)
    {
        $size = number_format($size / 1048576, 2) . ' MB';
    }
    elseif ($size >= 1024)
    {
        $size = number_format($size / 1024, 2) . ' KB';
    }
    elseif ($size > 1)
    {
        $size = $size . ' bytes';
    }
    elseif ($size == 1)
    {
        $size = $size . ' byte';
    }
    else
    {
        $size = '0 bytes';
    }
 return $size;
}

function get_folder_size($folder_name)
{
    $total_size=0;
 $file_data = scandir($folder_name);
 foreach($file_data as $file)
 {
  if($file === '.' or $file === '..')
  {
   continue;
  }
  else
  {
   $path = $folder_name . '/' . $file;
   $total_size = $total_size + filesize($path);
  }
 }
 return format_folder_size($total_size);
}

if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
     $fullname=$_SESSION['fullname'];
    $getrollno="select roll_no from student_rait_data where sname='$fullname';";
	$result=mysqli_query($db,$getrollno);
    if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
        $roll=$row["roll_no"];
    }
    $dw='doc/'.$roll;
  $folder = array_filter(glob($dw), 'is_dir');
  $roll_no=$rollno;
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th>Folder Name</th>
    <th>Total File</th>
    <th>Size</th>
    <th>Update</th>
    <th>Delete</th>
    <th>Upload File</th>
    <th>View Uploaded File</th>
   </tr>
   ';
  if(count($folder) > 0)
  {
   foreach($folder as $name)
   {
       if ($name!='imgs' && $name!='css'){
    $output .= '
     <tr>
      <td><i class="fa fa-folder" aria-hidden="true"></i> '.substr($name,4,strlen($name)).'</td>
      <td>'.(count(scandir($name)) - 2).'</td>
      <td>'.get_folder_size($name).'</td>
      <td><button type="button" name="update" data-name="'.$name.'" class="update btn btn-warning btn-xs">Update</button></td>
      <td><button type="button" name="delete" data-name="'.$name.'" class="delete btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
      <td><button type="button" name="upload" data-name="'.$name.'" class="upload btn btn-info btn-xs"><i class="fa fa-upload" aria-hidden="true"></i> Upload File</button></td>
      <td><button type="button" name="view_files" data-name="'.$name.'" class="view_files btn btn-default btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View Files</button></td>
     </tr>';
   }
}
  }
  else
  {
   $output .= '
    <tr>
     <td colspan="6">No Folder Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
 
 if($_POST["action"] == "create")
 {
  if(!file_exists($_POST["folder_name"])) 
  {
   mkdir($_POST["folder_name"], 0777, true);
   echo 'Folder Created';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }
 if($_POST["action"] == "change")
 {
  if(!file_exists($_POST["folder_name"]))
  {
   rename($_POST["old_name"], $_POST["folder_name"]);
   echo 'Folder Name Change';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }
 
 if($_POST["action"] == "delete")
 {
  $files = scandir($_POST["folder_name"]);
  foreach($files as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    unlink($_POST["folder_name"] . '/' . $file);
   }
  }
  if(rmdir($_POST["folder_name"]))
  {
   echo 'Folder Deleted';
  }
 }
 
 if($_POST["action"] == "fetch_files")
 {
  $file_data = scandir($_POST["folder_name"]);
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th>File Name</th>
    <th>Delete</th>
   </tr>
  ';
  
  foreach($file_data as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    $path = 'doc/'.$_POST["folder_name"] . '/' . $file;
    $fold = "doc/".$_POST["folder_name"];
    $output .= '
    <tr>
     <td contenteditable="true" data-folder_name="'.$fold.'"  data-file_name = "'.$fold.'" class="change_file_name"><i class="fa fa-file" aria-hidden="true"></i> '.$file.'</td>
     <td><button name="remove_file" class="remove_file btn btn-danger btn-xs" id="'.$path.'"><i class="fa fa-times" aria-hidden="true"></i> Remove</button></td>
    </tr>
    ';
   }
  }
  $output .='</table>';
  echo $output;
 }
 
 if($_POST["action"] == "remove_file")
 {
    if(file_exists(substr($_POST["path"],4,strlen($_POST["path"]))))
  {
   unlink(substr($_POST["path"],4,strlen($_POST["path"])));
   echo 'File Deleted';
  }
 }
 
 if($_POST["action"] == "change_file_name")
 {
  $old_name = $_POST["folder_name"] . '/' . $_POST["old_file_name"];
  $new_name = $_POST["folder_name"] . '/' . $_POST["new_file_name"];
  if(rename($old_name, $new_name))
  {
   echo 'File name changed successfully';
  }
  else
  {
   echo 'There is an error';
  }
 }
}
?>