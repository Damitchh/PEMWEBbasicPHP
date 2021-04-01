<?php
$file = 'test.txt';
$file_handle = fopen ($file,'r') or die("cant open file");
$read = fgets($file_handle);
fclose($file_handle);
echo $read;