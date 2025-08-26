<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';

$bookinfo = new SimpleXMLElement("<Bookinfo></Bookinfo>");
$book1=$bookinfo->addChild("Book");
$book1->addChild("bookno",1);
$book1->addChild("bookname","Java");
$book1->addChild("authorname","Balguru Swami");
$book1->addChild("price","250");
$book1->addChild("year","2006");
$book2=$bookinfo->addChild("Book");
$book2->addChild("bookno",2);
$book2->addChild("bookname","C");
$book2->addChild("authorname","Denis Ritchie");
$book2->addChild("price","500");
$book2->addChild("year","1971");
$bookinfo->asXML("book.xml");
echo $bookinfo->asXML();
?>

