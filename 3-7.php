<?php
$color = ['黒', '白', '赤', '黄', 'とうめい', 'オレンジ'];
// print_r($color);
// echo $color[0];

//配列の同じ動作の繰り返し

// for(初期値、繰り返し条件、更新処理)
// for ($i = 0; $i < 4; $i = $i + 1) {
for ($i = 0; $i < count($color); $i++) {
  echo '・', $color[$i], "\n";
  // echo '・', $color[$i], '\n';シングルクオテーションは改行を考慮しないことに注意
}
