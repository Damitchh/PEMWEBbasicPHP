<?php
   include "koneksi.php";
   $e = $_POST['e'];
   if (empty($e)) {
      mysqli_query($connect,"INSERT INTO user VALUES ('$_POST[username]', '$_POST[password]', '$_POST[level]')");
   } else {
      mysqli_query($connect,"UPDATE user SET password = '$_POST[password]', level = '$_POST[level]' WHERE username = '$_POST[username]'");
   }
   header("location:Lat5_1.php");

