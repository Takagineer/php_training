<?php
// $pref['hokkaido'] = '北海道';
// $pref['aomori'] = '青森県';
// $pref['iwate'] = '岩手県';


$pref = [
  'hokkaido' => '北海道',
  'aomori' => '青森県',
  'iwate' => '岩手県'
];

//indexを添字ではなくキーワードにした配列を連想配列と呼ぶ。
//多次元配列はindex(次元)を複数組み合わせた配列のこと。
// echo $pref[2];
echo $pref['hokkaido'];
