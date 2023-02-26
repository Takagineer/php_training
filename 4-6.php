<?php
$tax = 10;
function sum($a, $b)
{
  global $tax;
  $ret = ($a + $b) * ($tax / 100 + 1);
  return $ret;
}
//スコープ。{}があると、{} の中と外で使用した場合、{}の外でしか参照できない
$num1 = 1000;
$num2 = 20000;

$answer = number_format(sum($num1, $num2));
echo $answer;
