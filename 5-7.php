<?php
class Item
{
  // public int $unit;
  protected int $unit;
  //protectedは親クラスと継承先のクラスで使用することができる。

  public function __construct(int $unit)
  {
    $this->unit = $unit;
  }
  public function getUnit(): string
  {
    return $this->unit . '個';
  }
}

class Book extends Item
{
  // 継承元のあるメソッドと同じメソッドを宣言することをオーバーライドと呼ぶ。
  // ただし、プロパティは継承したクラスであっても使用することはできない。
  // このときに継承元のクラスでプロパティを宣言する際にはprotectedを使用すると良い
  public function getUnit(): string
  {
    return $this->unit . '冊';
  }
}

$eraser = new Item(10);
echo $eraser->getUnit() . "\n";

$book = new Book(5);
$book = new Book(5, 100);
echo $book->getUnit();
// $book->unit;
// これはダメ
