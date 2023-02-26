<?php

declare(strict_types=1);
$tax = 10;
function sum(int $a, int $b)
{
  global $tax;
  $ret = ($a + $b) * ($tax / 100 + 1);
  return $ret;
}
//スコープ。{}があると、{} の中と外で使用した場合、{}の外でしか参照できない
// $num1 = 'abc';
$num1 = 10000;
// $num1 = '10000';
$num2 = 20000;

$answer = number_format(sum($num1, $num2));
echo $answer;
