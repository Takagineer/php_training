<?php
// $items = [
//   [
//     'name' => 'PHP',
//     'price' => 1500
//   ],
//   [
//     'name' => 'JavaScript',
//     'price' => 1000
//   ],
//   [
//     'name' => 'Go',
//     'price' => 3000
//   ]
// ];

// $json_items = json_encode($items, JSON_UNESCAPED_UNICODE);
//コードか→json化している。連想配列が必要
//第二引数でエスケープ処理（→文字コードを変換している）

// file_put_contents('data/items.json', $json_items);
// echo $json_items;
//キーと値がありわかりやすい。

//↓ファイルの呼び込み
$json = file_get_contents('data/items.json');
$items = json_decode($json);
//エンコードの逆
echo print_r($items);
