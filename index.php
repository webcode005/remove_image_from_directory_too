<?php 
include'db.php';

 public function removeDirectory($path) 
  {
    $files = glob($path . '/*');
    foreach ($files as $file) {
      is_dir($file) ? removeDirectory($file) : unlink($file);
    }
    rmdir($path);
    return;
  }
  
  $file_name=$_GET['file'];
   $id=$_GET['id'];
  
  $conn->query("DELETE FROM tbl_name file_name='' WHERE id='$id';
  removeDirectory($file_name);
  header("Location:index.php");


?>
