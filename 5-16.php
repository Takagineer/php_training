<?php
class Item
{
  public string $name;
}

$item1 = new Item();
$item1->name = 'PHP入門' . "\n";
echo $item1->name;

// $item2 = $item1;
$item2 = clone ($item1);

$item1->name = 'JS入門';
//ここだと$items2のnameは変更していないはずがJS入門と出てしまう。
echo $item2->name;
