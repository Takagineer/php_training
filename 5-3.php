<?php
class Item
{
  //クラスないにプロパティ（変数）とメソッド（function）を記述することができる。
  public string $name;
  public int $price;

  public function getPrice(string $end = '')
  {
    return number_format($this->price) . $end;
  }
}

$php_basic = new Item();
$php_basic->name = 'PHP入門';
$php_basic->price = 1500;

echo $php_basic->name, '/', $php_basic->getPrice('円');


$php_basic = new Item();
$php_basic->name = 'JS入門';
$php_basic->price = 2500;

// echo $php_basic->name, '/', $php_basic->price;;
echo $php_basic->name, '/', $php_basic->getPrice('円');
