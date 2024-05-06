<?php

function myFunction(...$num)
{
  $avg = array_sum($num) / count($num);
  return $avg;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$average = myFunction(...$numbers);
echo "Average: " . $average . "\n";



echo PHP_EOL;
echo PHP_EOL;

function myFunction2($x, ...$numArr)
{
  echo "First Number: " . $x . "\n";
  echo "Remaining numbers: ";
  foreach ($numArr as $numKeys) {
    echo "$numKeys ";
  }
}

myFunction2(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


echo PHP_EOL;
echo PHP_EOL;

function myFunction3()
{
  $sum = 0;
  foreach (func_get_args() as $nums) {
    $sum += $nums;
  }
  return $sum;
}

echo myFunction3(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


echo PHP_EOL;
echo PHP_EOL;


function myFunction4()
{
  $len = func_num_args();
  echo "Numbers : ";
  $i = 0;
  for ($i = 0; $i < $len; $i++) {
    echo func_get_arg($i) . " ";
  }
}

myFunction4(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


echo PHP_EOL;
echo PHP_EOL;
