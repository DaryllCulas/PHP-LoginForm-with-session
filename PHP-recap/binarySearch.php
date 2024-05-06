<?php
// Binary search using recursion
function binarySearch($my_list, $low, $high, $elem)
{
  if ($high >= $low) {
    $mid = intval(($high + $low) / 2);

    if ($my_list[$mid] == $elem)
      return $mid;


    else if ($my_list[$mid] > $elem)
      return binarySearch($my_list, $low, $mid - 1, $elem);


    else
      return binarySearch($my_list, $mid + 1, $high, $elem);
  } else
    return -1;
}
$list = [5, 12, 23, 45, 49, 67, 71, 77, 82];
$num = 45;
$result = binarySearch($list, 0, count($list) - 1, $num);
if ($result != -1)
  echo "Number $num found at index " . $result;
else
  echo "Element not found";
