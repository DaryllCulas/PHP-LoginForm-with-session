<?php

class Books
{

  public $title;
  public $author;
  public $price;


  function __construct($bookTitle, $bookAuthor, $bookPrice)
  {
    $this->title =  $bookTitle;
    $this->author = $bookAuthor;
    $this->price = $bookPrice;
  }


  function setTitle($bookTitle)
  {
    $this->title = $bookTitle;
  }

  function setAuthor($bookAuthor)
  {
    $this->author = $bookAuthor;
  }

  function setPrice($bookPrice)
  {
    $this->price = $bookPrice;
  }

  function getTitle()
  {
    echo $this->title . PHP_EOL;
    return $this->title; // Function overriding
  }

  function getAuthor()
  {
    echo $this->author . PHP_EOL;
    return $this->author;
  }

  function getPrice()
  {
    echo $this->price . PHP_EOL;
    return $this->price;
  }
}


$physics = new Books("Physics", "Albert Einstein", 100);
$math = new Books("Math", "Nikola Tesla", 200);
$chemistry = new Books("Chemistry", "Marie Curie", 300);

// $physics->setTitle('Physics');
// $math->setTitle('Math');
// $chemistry->setTitle('Chemistry');


// $physics->setAuthor('Albert Einstein');
// $math->setAuthor('Nikola Tesla');
// $chemistry->setAuthor('Marie Curie');


// $physics->setPrice(100);
// $math->setPrice(200);
// $chemistry->setPrice(300);

$physics->getTitle();
$math->getTitle();
$chemistry->getTitle();

$physics->getAuthor();
$math->getAuthor();
$chemistry->getAuthor();


$physics->getPrice();
$math->getPrice();
$chemistry->getPrice();
