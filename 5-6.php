<?php
class Item
{
  //アクセス識別子。プロパティは外から触ることのできる（public）形式は良くない。
  // public/private/protected。
  // publicは外から触れる
  public string $name;
  private int $price;
  // public int $page;
  //仮にここでページを使用する際、Itemのクラスに記述すべきではないとする（他の商品、例えば文具等を扱うことを考える）。
  //そうであるとするならば、このItemクラスにはpageというプロパティは記述しない方がいい。

  public function __construct(string $name = '入門', int $price = 0) //コンストラクターはpublic/名前は__construct
  {
    $this->name = $name;
    $this->price = $price;
  }

  //価格を設定するセッターの記述。∵プロパティの識別子がprivateで、通常であればいじることができない。
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

//ここでItem（継承元）のクラスを継承しているため。プロパティ、メソッドも使用することができる。
class Book extends Item
{
  public int $page;
}

$php_basic = new Book('PHP入門', 0);
$php_basic->name = 'PHP入門';
// $php_basic->price = 1500;
// $php_basic->price = -100000;
$php_basic->page = 100;
$php_basic->setPrice(1500);

echo $php_basic->name, '(', $php_basic->page, 'ページ)/', $php_basic->getPrice('円');


// $php_basic = new Item('JS入門', 2500);
// $php_basic->name = 'JS入門';
// $php_basic->price = 2500;

// // echo $php_basic->name, '/', $php_basic->price;;
// echo $php_basic->name, '/', $php_basic->getPrice('円');
