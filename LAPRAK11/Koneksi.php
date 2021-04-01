<?php
  $namahost = "damitch.id";
  $username = "root";
  $password = "damitch";
  $database = "pemweb"; 

  $connect = mysqli_connect($namahost,$username,$password) or die("Failed");
  mysqli_select_db($connect,$database) or die("Database not exist");
  ?>
