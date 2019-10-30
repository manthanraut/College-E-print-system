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
                    echo '<script>alert("Folder deleted successfully");</script>';
                } else {
                    unlink($dirPath . DIRECTORY_SEPARATOR . $object);
                    echo '<script>alert("Folder deleted successfully");</script>';
                }
            }
        }
    reset($objects);
    rmdir($dirPath);
    }
	header("Location: admin.php");
}
	?>
fa-search