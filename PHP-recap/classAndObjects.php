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
    return $this->author; // Function overriding
  }

  function getPrice()
  {
    echo $this->price . PHP_EOL;
    return $this->price; // Function overriding
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



echo PHP_EOL;
echo PHP_EOL;


class Foo
{
  public static $my_static = 'fooSHingShao';
  public function staticValue()
  {
    return self::$my_static;
  }
}

print Foo::$my_static . "\n";
$foobar = new Foo();
print $foobar->staticValue() . "\n";




echo PHP_EOL;
echo PHP_EOL;


class Name
{

  var $_firstName;
  var $_lastName;

  function setName($firstName, $lastName)
  {
    $this->_firstName = $firstName;
    $this->_lastName = $lastName;
  }

  public function toString()
  {
    return $this->_firstName . ' ' . $this->_lastName;
  }
}

class NameSub1 extends Name
{
  var $_middleInitial;

  function NameSub1($first_name, $last_name, $middle_initial)
  {
    Name::setName($first_name, $last_name);
    $this->_middleInitial = $middle_initial;
  }


  function toString()
  {
    return Name::toString() . ' ' . $this->_middleInitial;
  }
}
