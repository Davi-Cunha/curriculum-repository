<?php

$lang = $_GET['lang'];
$langArray = array('en', 'pt-br');
$found = false;

if (in_array($lang, $langArray)) {
    $found = true;
}
if (!$found) {
    $lang = 'en';
}

$xml = simplexml_load_file("./languages/languages.xml") or die("xml not found!");

/*TITLE*/

$titleh1 = $xml->titleh1->$lang;
$titleh2 = $xml->titleh2->$lang;
$titleh3one = $xml->titleh3one->$lang;
$titleh3two = $xml->titleh3two->$lang;
$titleh3three = $xml->titleh3three->$lang;
$titleh3four = $xml->titleh3four->$lang;
$titlea = $xml->titlea->$lang;

/*ABOUT*/





