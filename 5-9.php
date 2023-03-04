<?php

//ルールを決めて、そのルールに沿ってクラスを定義していく。
interface ItemInterface
{
  public function getPrice(): int;
}

//ItemInterfaceを実装したBookクラス、と呼ぶ
class Book implements ItemInterface
{
  private int $price;
  public function getPrice(): int
  {
    return $this->price;
  }
}

class Pencil implements ItemInterface
{
  private int $price;
  public function getPrice(): int //ここのメソッドがないとエラーになる。
  {
    return $this->price;
  }
}
