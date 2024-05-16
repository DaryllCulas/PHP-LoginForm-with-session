<?php
$maxmarks = 300;

$percent = function ($marks) use ($maxmarks) {
  return $marks * 100 / $maxmarks;
};

$m = 250;
echo "Marks = $m \nPercentage = " . $percent($m);
