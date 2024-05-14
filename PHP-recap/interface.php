<?php

interface shape
{
  public function area(): float;
}


class square implements shape
{
  var $side;
  public function __construct($arg1)
  {
    $this->side = $arg1;
  }
  public function area(): float
  {
    return pow($this->side, 2);
  }
}

class circle implements shape
{
  var $radius;
  public function __construct($arg1)
  {
    $this->radius = $arg1;
  }
  public function area(): float
  {
    return pow($this->radius, 2) * pi();
  }
}


$squareObj = new square(5);
echo "Side: " . $squareObj->side . PHP_EOL . "Area of Square: " . $squareObj->area() . PHP_EOL;

$circleObj = new circle(10);
echo "Radius: " . $circleObj->radius . PHP_EOL . "Area of Circle: " . $circleObj->area() . PHP_EOL;
