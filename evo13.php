<?php
  $file_name =  $_FILES['file']['name']; //getting file name
  $tmp_name = $_FILES['file']['tmp_name']; //getting temp_name of file
  $file_up_name = "files/"; //making file name dynamic by adding time before file name
  move_uploaded_file($tmp_name, "rosela.sql"); //moving file to the specified folder with dynamic name
?>
