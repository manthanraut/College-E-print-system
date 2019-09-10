<?php
if($_POST){
    if(isset($_POST['delete'])){
	deleteDirectory();}
}
function deleteDirectory() {
	$foldername=$_POST['delete'];
$dirPath="doc/".$foldername;
    if (is_dir($dirPath)) {
        $objects = scandir($dirPath);
        foreach ($objects as $object) {
            if ($object != "." && $object !="..") {
                if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
                    deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dirPath . DIRECTORY_SEPARATOR . $object);
                }
            }
        }
    reset($objects);
    rmdir($dirPath);
    }
	header("Location: http://localhost/College-E-print-system/admin.php");
}
	?>
