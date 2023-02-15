<?php

$number1 = 10;
// $number2 = '10';
$number2 = 10.0; //float型

// if ($number1 === $number2) {
//↑型キャストをしている
if ($number1 === (int)$number2) {
  echo '同じです';
} else {
  echo '同じではありません';
}
