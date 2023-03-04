<?php
// 抽象クラスと中小メソッドによって継承とinterfaceのいいとこ取りをする。
// 抽象クラスはinterfaceを使用することでルールを決めるだけでなく、通常のクラスと同様プロパティやメソッドも定義することができる。
abstract class Item
{
  private $price;
  public function getPrice()
  {
    return $this->price;
  }

  //中小メソッドを作成する。中身のないメソッド
  abstract public function getUnit();
}

class Book extends Item
{
  public function getUnit()
  {
    return '冊';
  }
}

class Pen extends Item
{
  public function getUnit()
  {
    return '本';
  }
}

// $book -> new Book();
// $book ->getPrice();
