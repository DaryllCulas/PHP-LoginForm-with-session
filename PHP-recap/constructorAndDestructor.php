<?php

class Book
{
  var $price;
  var $title;


  public function __construct(String $param1, int $param2)
  {
    $this->title = $param1;
    $this->price = $param2;
  }

  public function getPrice()
  {
    echo "Price: $this->price" . PHP_EOL;
  }


  public function getTitle()
  {
    echo "Title: $this->title"  . PHP_EOL;
  }
}



class Book2
{

  private $price;
  private $title;


  public function __construct(String $param1 = "PHP fundamentals 101", int $param2 = 100)
  {
    $this->title = $param1;
    $this->price = $param2;
  }

  public function getPrice()
  {
    echo "Price: $this->price" . PHP_EOL;
  }

  public function getTitle()
  {
    echo "Title: $this->title"  . PHP_EOL;
  }
}


$obj1 = new Book("PHP Basics 101", 100);
$obj2 = new Book("PHP OOP", 200);

$obj1->getTitle();
$obj1->getPrice();

$obj2->getTitle();
$obj2->getPrice();
