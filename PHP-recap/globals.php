<?php

function myFunction()
{
  $var1 = "Hello PHP";
  echo "var1 in global namespace: " . $GLOBALS['var1'] . PHP_EOL;
  echo "var1 as local variable: " . $var1;
}

$var1 = "Hello World";
myFunction();
