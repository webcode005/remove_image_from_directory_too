<?php 
include'db.php';

//  public function removeDirectory($path) 
//   {
//     $files = glob($path . '/*');
//     foreach ($files as $file) {
//       is_dir($file) ? removeDirectory($file) : unlink($file);
//     }
//     rmdir($path);
//     return;
//   }




public function removeFile($filename) 
  {
  $path = "uploads/";
    $files = glob($path . $filename);
    foreach ($files as $file) {
      unlink($file);
    }
    return;
  }
  
  $file_name=$_GET['file'];
   $id=$_GET['id'];
  
  $conn->query("DELETE FROM tbl_name file_name='' WHERE id='$id';
  removeFile($file_name);
  header("Location:index.php");


?>
