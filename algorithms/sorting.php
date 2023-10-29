<?php
function merge_sort($arr) {
   $len = count($arr);
   if ($len <= 1) {
      return $arr;
   }
   $mid = (int)($len / 2);
   $left = array_slice($arr, 0, $mid);
   $right = array_slice($arr, $mid);
   $left = merge_sort($left);
   $right = merge_sort($right);
   return merge($left, $right);
}

function merge($left, $right) {
   $result = array();
   while (count($left) > 0 && count($right) > 0) {
      if ($left[0]['donor_name'] <= $right[0]['donor_name']) {
         $result[] = array_shift($left);
      } else {
         $result[] = array_shift($right);
      }
   }
   while (count($left) > 0) {
      $result[] = array_shift($left);
   }
   while (count($right) > 0) {
      $result[] = array_shift($right);
   }
   return $result;
}


