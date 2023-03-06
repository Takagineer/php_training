<?php
// XMLを扱う
$items = simplexml_load_file('data/items.xml');
foreach ($items as $item) {
  // echo $item->name, '/', $item->price, "\n";
  echo $item->name, '/', number_format((int)$item->price), "\n"; //キャストを入れないとnumber_formatはエラー
}

$add_element = $items->addChild('item');
$add_element->addChild('name', 'Go入門');
$add_element->addChild('price', '3000');

$items->asXML('data/items.xml');

//タグによりデータが大きくなりやすい
