<?php
  function get_max() {
    if (func_num_args() == 0) {
        return false;
      } else {
        $sum = 0;
        foreach (func_get_args() as $arg) {
          if($sum < $arg){
             $sum = $arg;
          }
        else{
            continue;
        }
        }
        return $sum;
      }
    }

  echo get_max(10, 20);      // Output: 20
  echo get_max(10, 20, 30);    // Output: 30
  echo get_max(10, 20, 30, 40); // Output: 40
