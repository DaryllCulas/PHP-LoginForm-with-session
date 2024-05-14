<?php

class squareMeasure
{
  const PI = M_PI;
  var $side = 5;

  function area()
  {
    $area = $this->side ** 2 * self::PI;
    return $area;
  }
}

$s1 = new squareMeasure();
echo "PI = " . squareMeasure::PI . PHP_EOL;
echo "Area = " . $s1->area() . PHP_EOL;
