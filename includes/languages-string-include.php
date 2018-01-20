<?php

$lang = $_GET['lang'];
$langArray = array('en', 'pt-br');
$found = false;

if(in_array($lang, $langArray)) {
    $found = true;
}
if(!$found) {
    $lang = 'en';
}
$xml = simplexml_load_file("languages.xml") or die("xml not found!");
$h1 = $xml->titleh1->$lang;
$h2 = $xml->titleh2->$lang;
$h3 = $xml->titleh3->$lang;
echo $h3[0];

