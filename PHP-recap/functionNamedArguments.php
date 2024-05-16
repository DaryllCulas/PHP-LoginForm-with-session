<?php

declare(strict_types=1);

function sum(int | float $x, int | float $y, ...$numbers): int | float
{
  return $x + $y + array_sum($numbers);
}

$a = 6.0;
$b = 5.0;
echo sum($a, $b, 50, 100, 150, 200);
