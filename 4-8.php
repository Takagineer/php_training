<?php
// function sum(int $a, int $b): int
// {
//   return $a + $b;
// }
// $sum = sum(10, 20);
// echo $sum;

function price_echo($callback)
{
  echo number_format($callback(1000, 2000)), '円';
}

//クロージャー(無名関数)を使用。{}の終わりに;を記述。
// $get_sum = function ($a, $b) {
//   return $a + $b;
// };

$get_sum = fn ($a, $b) => $a + $b;

$sum = $get_sum(10, 20);
echo $sum;


// price_echo($get_sum);
// price_echo(function ($a, $b) {
//   return $a + $b;
// });
