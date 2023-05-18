<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Book\Book;

$book = new Book();

echo $book->path(), "<hr />";
// echo "Hello World!";