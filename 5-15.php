<?php
class Item
{
  public static int $tax = 10;
  public static function getTax(): int
  {
    return self::$tax;
  }
}

echo Item::getTax();
echo Item::$tax;
