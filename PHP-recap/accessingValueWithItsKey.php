<?php
$arr1 = array(
  "a" => "apple",
  "b" => "banana",
  "c" => "cherry",
  "d" => "durian",
  "e" => "elephant"

);

foreach ($arr1 as $key => $value) {
  $arr2[$key] = $value;
}
print_r($arr2);
