<?php
$pref = [
  'hokkaido' => '北海道',
  'aomori' => '青森',
  'iwate' => '岩手'
];

//連想配列に対して繰り返し処理を行う際に使用したりするが、普通の配列にも使用できる。keyを使用したりする際に便利
// foreach ($pref as $pref_name) {
foreach ($pref as $pref_key => $pref_name) {
  echo '・', $pref_key, ':', $pref_name, "\n";
}
