<?php
//  $myFile = "testFile.txt";
//  $fh = fopen($myFile, 'r');
 // $theData = fgets($fh);
  //fclose($fh);
//  echo $theData;

  $myFile = "testFile.txt";
  $fh = fopen($myFile, 'r');
  $theData = file_get_contents($myFile);
  fclose($fh);
  echo $theData;
?>

