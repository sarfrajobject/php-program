<?php
   if(!file_exists("index.txt")) {
      die("File not found");
   }else {
      $file = fopen("index.txt","r");
      echo "Opend file sucessfully";
   }
   // Test of the code here.
?>