<?php  
  
/* This short script forces a file download.  
   For simplicity, it's intended to be used for a single file.  
   You can use multiple copies of this file (with unique names)  
   with different variable values to use it with multiple files.  
  
   Use of this script has a side-effect of hiding the location of the  
   file on your server.  
*/  
  
  
// full server path to file to be downloaded (including filename)  
  
$Path2File = "path/to-file-on-server.zip";  
  
// the filename  
  
$theFileName = "name-of-file.zip";  
  
//the work gets done here  
  
header ("Cache-Control: must-revalidate, post-check=0, pre-check=0");  
header ("Content-Type: application/octet-stream");  
header ("Content-Length: " . filesize($Path2File));  
header ("Content-Disposition: attachment; filename=$theFileName");  
readfile($Path2File);  
  
?>  