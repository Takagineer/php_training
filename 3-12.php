<?php

$scores = []; //点数を格納する配列

do {
  echo '点数を入力してください';
  $score = (int)fgets(STDIN);
  if ($score === -1) {
    break;
  }

  array_push($scores, $score);

  $sum = 0;

  for ($i = 0; $i < count($scores); $i++) {
    // echo $i + 1, '.', $scores[$i], "\n";
    $sum += $scores[$i];
  }
  echo '合計： ', $sum, "\n";
  $avg = $sum / count($scores);
  echo '平均： ', $avg, "\n";
  // } while ($score !== -1);
} while (true);
