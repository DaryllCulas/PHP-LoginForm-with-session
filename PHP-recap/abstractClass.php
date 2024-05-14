<?php


abstract class marks
{
  protected int $m1, $m2, $m3;

  // you can change the modifier access here either public or protected
  abstract protected function percent(): float;
}

class student extends marks
{
  public function __construct($x, $y, $z)
  {
    $this->m1 = $x;
    $this->m2 = $y;
    $this->m3 = $z;
  }

  public function percent(): float
  {
    return ($this->m1 + $this->m2 + $this->m3) * 100 / 300;
  }
}

$s1 = new student(70, 80, 90);
echo "The average of marks: " . $s1->percent() . "%" . PHP_EOL;
