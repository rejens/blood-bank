<?php
function binarySearch($arr, $x) {
   $low = 0;
   $high = count($arr) - 1;
   $foundData=[];
   while ($low <= $high) {
      $mid = floor(($low + $high) / 2);
      if ($arr[$mid]['blood_id'] == $x) {
         array_push($foundData,$arr[$mid]);
      }
      if ($arr[$mid]['blood_id'] < $x) {
         $low = $mid + 1;
      } else {
         $high = $mid - 1;
      }
   }
   return $foundData;
}
