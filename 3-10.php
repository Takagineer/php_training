<?php

// $dice = rand(1, 6); //指定した数値内で乱数を取る

// while ($dice !== 1) {
//   echo $dice, "\n";
//   $dice = rand(1, 6);
// }
// echo $dice;

// 最初に一度試行を行い、その後にその条件を使用して繰り返し処理をする際にdo ~ while構文を使用する

do {
  $dice = rand(1, 6);
  echo $dice, "\n";
} while ($dice !== 1);
