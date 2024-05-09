<?php

/**Class inheritance**/
class Book3
{

  protected int $price;
  protected string $title;


  public function getBook(string $param1, int $param2)
  {
    $this->title = $param1;
    $this->price = $param2;
  }

  public function dispbook()
  {
    echo "Title: $this->title" . PHP_EOL . "Price: $this->price" . PHP_EOL;
  }
}


class E_Book extends Book3
{
  private string $format;
  public function getEbook(String $param1, int $param2, string $param3)
  {
    $this->title = $param1;
    $this->price = $param2;
    $this->format = $param3;
  }

  public function dispEbook()
  {
    echo "Title: $this->title Price: $this->price" . PHP_EOL;
    echo "Format: $this->format" . PHP_EOL;
  }
}


$eb = new E_Book();
$eb->getEbook("Aralin Panlipunan", 450, "PDF");
$eb->dispEbook();
