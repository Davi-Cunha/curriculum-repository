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

$titleH1 = $xml->titleH1->$lang;
$titleH2 = $xml->titleH2->$lang;
$titleH3One = $xml->titleH3One->$lang;
$titleH3Two = $xml->titleH3Two->$lang;
$titleH3Three = $xml->titleH3Three->$lang;
$titleH3Four = $xml->titleH3Four->$lang;
$titleA = $xml->titleA->$lang;

/*ABOUT*/

/*ABOUT HEADER*/
$aboutHeaderH3 = $xml->aboutHeaderH3->$lang;
$aboutHeaderH2 = $xml->aboutHeaderH2->$lang;
$aboutParagraph = $xml->aboutParagraph->$lang;

/*ABOUT CONTAINER INFO STRONG*/
$profileContainerStrongOne = $xml->profileContainerStrongOne->$lang;
$profileContainerStrongTwo = $xml->profileContainerStrongTwo->$lang;
$profileContainerStrongThree = $xml->profileContainerStrongThree->$lang;
$profileContainerStrongFour = $xml->profileContainerStrongFour->$lang;
$profileContainerStrongFive = $xml->profileContainerStrongFive->$lang;
$profileContainerStrongSix = $xml->profileContainerStrongSix->$lang;
$profileContainerStrongSeven = $xml->profileContainerStrongSeven->$lang;

/*ABOUT CONTAINER INFO SPAN*/
$profileContainerSpanOne = $xml->profileContainerSpanOne->$lang;
$profileContainerSpanTwo = $xml->profileContainerSpanTwo->$lang;
$profileContainerSpanThree = $xml->profileContainerSpanThree->$lang;
$profileContainerSpanFour = $xml->profileContainerSpanFour->$lang;
$profileContainerSpanFive = $xml->profileContainerSpanFive->$lang;
$profileContainerSpanSix = $xml->profileContainerSpanSix->$lang;
$profileContainerSpanSeven = $xml->profileContainerSpanSeven->$lang;

/*ABOUT CONTAINER SKILLS STRONG*/
$profileContainerSkillsStrong = $xml->profileContainerSkillsStrong->$lang;

/*ABOUT CONTAINER SKILLS P*/
$profileContainerSkillsP = $xml->profileContainerSkillsP->$lang;

/*ABOUT HIRE ME*/
$hireme = $xml->hireme->$lang;

/*ABOUT DOWNLOAD CV*/
$downloadCV = $xml->downloadCV->$lang;


/*RESUME*/

/*RESUME HEADER*/
$resumeHeaderH3 = $xml->resumeHeaderH3->$lang;
$resumeHeaderH1 = $xml->resumeHeaderH1->$lang;
$resumeHeaderP = $xml->resumeHeaderP->$lang;

/*RESUME WORK CONTAINER WRAP*/
$timelineWrapHeaderH4 = $xml->timelineWrapHeaderH4->$lang;

/*RESUME WORK CONTAINER*/
$workH4TimelineHeaderOne = $xml->workH4TimelineHeaderOne->$lang;
$workH4TimelineHeaderTwo = $xml->workH4TimelineHeaderTwo->$lang;
$workPTimelineHeaderOne = $xml->workPTimelineHeaderOne->$lang;
$workPTimelineHeaderTwo = $xml->workPTimelineHeaderTwo->$lang;
$workH4TimelineOccupationOne = $xml->workH4TimelineOccupationOne->$lang;