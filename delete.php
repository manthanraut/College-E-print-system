<?php
// $target=$_GET['search'];
// delete_files('/doc/'.$target);

 /* 
  * php delete function that deals with directories recursively
  */
//   function delete_files($target) {
//       if(is_dir($target)){
//           $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returne
//           foreach( $files as $file )
//               delete_files( $file );             
//           rmdir( $target );
//       } elseif(is_file($target)) {
//           unlink( $target );  
//       }
//   }


  function removeFolder($folder){
      if(is_dir($folder)==true){
          $folderContents=scandir($folder);
          unset($folderContents[0],$foldercontents[1]);      
          foreach($folderConyents as $content => $contentName){
              $currentPath = $folder.'/'.$contentName;
              $filetype = filetype($currentPath);
              if($filetype =='dir'){
                  removeFolder($currentPath);
              }else{
                  unlink($currentPath);
              }
              unset($folderContents[$content]);
          }
          rmdir($folder);
      }
  }
  
 $tfolder=$_POST['search'];
 removeFolder($tfolder);
 header("Location:admin.php");
?>