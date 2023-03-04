<?php
class Item
{
  //コンストラクターにより初期化する。
  public string $name;
  public int $price;

  public function __construct(string $name = '入門', int $price = 0) //コンストラクターはpublic/名前は__construct
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getPrice(string $end = '')
  {
    return number_format($this->price) . $end;
  }
}

$php_basic = new Item('PHP入門', 1500);
$php_basic->name = 'PHP入門';
$php_basic->price = 1500;

echo $php_basic->name, '/', $php_basic->getPrice('円');


$php_basic = new Item('JS入門', 2500);
$php_basic->name = 'JS入門';
$php_basic->price = 2500;

// echo $php_basic->name, '/', $php_basic->price;;
echo $php_basic->name, '/', $php_basic->getPrice('円');
