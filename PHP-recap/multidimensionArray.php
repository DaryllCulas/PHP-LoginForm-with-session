<?php


$tbl = [
  [1, 2, 3, 4],
  [10, 20, 30, 40],
  [100, 200, 300, 400]
];

foreach ($tbl as $row) {
  foreach ($row as $col) {
    echo ($col . " ");
  }
  echo ("\n");
}
