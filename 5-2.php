<?php
class Item
{
  //クラスないにプロパティ（変数）とメソッド（function）を記述することができる。
  public string $name;
  public int $price;
}

$php_basic = new Item();
$php_basic->name = 'PHP入門';
$php_basic->price = 1500;

echo $php_basic->name, '/', $php_basic->price;;


$php_basic = new Item();
$php_basic->name = 'JS入門';
$php_basic->price = 2500;

echo $php_basic->name, '/', $php_basic->price;;
