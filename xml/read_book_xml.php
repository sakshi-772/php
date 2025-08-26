<?php


$xml = simplexml_load_file('book.xml');


foreach ($xml->Book as $book) {
    echo "Book No: " . htmlspecialchars($book->bookno) . "<br>";
    echo "Book Name: " . htmlspecialchars($book->bookname) . "<br>";
    echo "Author: " . htmlspecialchars($book->authorname) . "<br>";
    echo "Price: " . htmlspecialchars($book->price) . "<br>";
    echo "Year: " . htmlspecialchars($book->year) . "<br><hr>";
}
?>

