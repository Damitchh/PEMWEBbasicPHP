<?php
function avg() {
  if (func_num_args() == 0) {
    return false;
  } else {
    $sum = 0;
    foreach (func_get_args() as $arg) {
      $sum += $arg;
    }
    
    return $sum/func_num_args();
  }
}

echo avg(1, 2, 3);
echo avg(2, 8);
echo avg(15);
