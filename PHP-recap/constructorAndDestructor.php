<?php

class Book
{
  var $price;
  var $title;


  public function __construct()
  {
    $this->title = "PHP fundamentals";
    $this->price = 100;
  }

  public function getPrice()
  {
    echo "Price: $this->price";
  }


  public function getTitle()
  {
    echo "Title: $this->title"  . PHP_EOL;
  }
}


$obj1 = new Book;
$obj1->getTitle();
$obj1->getPrice();
