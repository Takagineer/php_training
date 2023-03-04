<?php
class Item
{
  //アクセス識別子。プロパティは外から触ることのできる（public）形式は良くない。
  // public/private/protected。
  // publicは外から触れる
  public string $name;
  private int $price;

  public function __construct(string $name = '入門', int $price = 0) //コンストラクターはpublic/名前は__construct
  {
    $this->name = $name;
    $this->price = $price;
  }

  //価格を設定する。セッターの記述。∵プロパティの識別子がprivateで、通常であればいじることができない。
  //メリットととして、メソッド内でif分などの記述をすることができるようになる。
  public function setPrice(int $price)
  {
    if ($price < 0) {
      return false;
    }
    $this->price = $price;
    return true;
  }

  public function getPrice(string $end = '')
  {
    return number_format($this->price) . $end;
  }
}

$php_basic = new Item('PHP入門', 0);
$php_basic->name = 'PHP入門';
// $php_basic->price = 1500;
// $php_basic->price = -100000;
$php_basic->setPrice(1500);

echo $php_basic->name, '/', $php_basic->getPrice('円');


// $php_basic = new Item('JS入門', 2500);
// $php_basic->name = 'JS入門';
// $php_basic->price = 2500;

// // echo $php_basic->name, '/', $php_basic->price;;
// echo $php_basic->name, '/', $php_basic->getPrice('円');
