<?php

class Base
{
  public function foo(int $a)
  {
    echo "Valid \n";
  }
}

class Extend1 extends Base
{
  public function foo(int $a = 5)
  {
    parent::foo($a);
  }
}

class Extend2 extends Base
{
  public function foo(int $a = 5, $b = 5)
  {
    parent::foo($a);
  }
}


$extended1 = new Extend1();
$extended1->foo();
$extended2 = new Extend2();
$extended2->foo(1);
