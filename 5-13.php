<?php
require_once 'app/Shop/book.php';
require_once 'app/Review/book.php';

// $book = new app\Shop\Book();
// echo $book->getPrice();
// この記述方法だと、名前空間を使用しているクラスを使用する際に
// newする度に記述が増える
// ↓

use app\Shop\Book;
use app\Review\Book as BookReview;

$book = new Book();
echo $book->getPrice(), "\n";

$book_review = new BookReview();
echo $book_review->getPoint();
