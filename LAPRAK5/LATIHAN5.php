<?php
 function fibonaci($i) {
  if($i==1 || $i==2 ) {
   return 1;
  } else if($i==3) {
   return 2;
  } else {
   return fibonaci($i-2)+fibonaci($i-1);
  }
 }

 for ($i=1; $i <= 6; $i++) { 
  echo fibonaci($i).",";
 }
 echo 
?>

