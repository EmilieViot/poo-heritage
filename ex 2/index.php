<?php

require "Reader.class.php";

$reader = new Reader("test@test.fr", "test");
$reader->addBookToFavorites("Harry Potter");
$reader->addBookToFavorites("Quand nos souvenirs viendront danser");
$reader->removeBookFromFavorites("Quand nos souvenirs viendront danser");

$infoReader = $reader->login();

var_dump($infoReader);