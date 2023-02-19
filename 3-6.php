<?php
//配列におけるファンクション
$color = ['黒', '白', '緑'];
// echo count($color);

// array_unshift($color, '黄', '青');
// array_pushで最後に追加できるが、配列[] = ''でもいい。一気に追加する際にはいい。ただし、array_pushは破滅的メソッドであることに注意する。
// 加工したくないときはarray_merge等がいいかも
// print_r($color);

//ただし破滅的メソッドであることに注意
// $favorite = array_shift($color);
// echo $favorite;
// 最後の要素に何かしたいときはarray_popを使用する

// 配列の要素を全て文字列で出す
$color_string = implode(',', $color);
$color_string .= ',赤,オレンジ'; //これでも配列に要素を追加できる
// $new_array = explode(',', $color_string);
// print_r($new_array);
print_r($color_string);
//逆はexplodeを使用する
