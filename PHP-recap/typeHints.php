<?php

declare(strict_types=1);
function addition(int $x, int $y): float
{
  return $x + $y;
}


$x = 10;
$y = 20;

$result = addition($x, $y);
echo "\nFirst Number: $x \nSecond Number: $y \nResult: $result";


echo PHP_EOL;
echo PHP_EOL;


class Student
{
  public $name;
  public $age;


  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function displayStudent()
  {
    echo "Name: " . $this->name . "\nAge: " . $this->age;
  }
}

$student1 = new Student("Amar", 21);

$student1->displayStudent();
