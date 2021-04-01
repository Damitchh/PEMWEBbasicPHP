<?php
$file ='testsalah.txt';
$file_handle = fopen($file,'r+') or die ("cant open file");
$data = "Isi pertama\n";
fwrite($file_handle,$data);
$data = "Isi kedua";
fwrite($file_handle,$data);
$read = file_get_contents($file);
fclose($file_handle);
echo $read;