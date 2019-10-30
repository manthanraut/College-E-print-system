<?php


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