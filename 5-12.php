<?php
//trait
// 下のようなクラスがあった際にスーパークラスを作成して継承するのも面倒、同じ処理（getTax）を何度も記述するのも面倒となった際に
// traitを使用して共通の処理をすることができる。
trait Tax
{
  public function getTax(): int
  {
    return 10;
  }
}

trait ForeignTax
{
  public function getTax(): int //同じfunction名は使用できない。
  //public function getForeignTex():intのように記述してしまえばcollisionsのエラーは起きない。

  {
    return 20;
  }
}

class Item
{
  use Tax, ForeignTax;
  use Tax, ForeignTax {
    Tax::getTax insteadof ForeignTax; //このままだとforeignTaxを使用できない
    ForeignTax::getTax as getForeignTax;
  }
  private int $price;
  // public function getTax(): int
  // {
  //   return 10;
  // }
  // ↑この処理をtraitを使用して記述する
}

class Service
{
  private int $service_price;
}
$item = new Item();
echo  $item->getTax();
echo  $item->getForeignTax();
