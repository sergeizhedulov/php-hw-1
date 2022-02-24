<?php

require_once __DIR__ . '/vendor/autoload.php';

use gbcom\Blog\Post;
use gbcom\Person\Name;
use gbcom\Person\Person;

$post = new Post(
   new Person(
       new Name('Иван', 'Никитин'),
       new DateTimeImmutable()
   ),
   'Всем привет!'
);

print $post;
