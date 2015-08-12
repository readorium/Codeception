<?php
$I= new AcceptanceTester($scenario);

$I->am('student');
$I->wantTo('test the options on the top bar');
$I->loadSessionSnapshot('login');

$I->amOnPage('/student/library');
$I->click(['xpath' => "//li[@id='achievements']"]);
$I->makeScreenshot('srAchievements'); 
$I->click(['xpath' => "//*[@id='fancybox-close']"]);

$I->wait(3);
$I->click(['xpath' => "//*[@id='share-idea']"]);
$I->makeScreenshot('ssShare_idea'); 
$I->click(['xpath' => "//*[@id='fancybox-close']"]);

$I->click(['xpath' => "//*[@id='report-bug']"]);
$I->makeScreenshot('stReport_bug'); 
?>

