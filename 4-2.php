<?php
function sum($num1, $num2)
{
  $answer = $num1 + $num2;
  return $answer;
  echo '完了';
  //returnの後に記述するとプログラムは無視される。
  //返り値を返し、下の記述で変数に代入している。
}

$item_sum = sum(100, 200);
echo $item_sum;
