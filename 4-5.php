<?php
$color = ['赤', '白', '黄色'];
//参照渡し。元の値を変更しない
// array_shift($color);
// print_r($color);

// $price = 10000;
// $new_price = number_format($price);
//値渡し。元の値を変更する。
// echo $new_price;

function add_head(&$target)
{
  for ($i = 0; $i < count($target); $i++) {
    $target[$i] = '・' . $target[$i] . "\n";
  }
}
print_r(($color));
add_head($color);
print_r(($color));
