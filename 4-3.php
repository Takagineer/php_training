<?php
function sum(...$numbers)
// function sum(...$numbers,$param1)にはできない。可変パラメーターを使用する際には最後に置く。
{
  $answer = 0;
  foreach ($numbers as $num) {
    $answer += $num;
  }
  return $answer;
}

$item_sum = sum(10, 2220, 30000);
echo $item_sum;
