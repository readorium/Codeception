<?php
$I = new AcceptanceTester($scenario);

$I->am('student');
$I->wantTo('check books, videos, and magazines');
$I->loadSessionSnapshot('login');

$I->selectOption(['xpath' => "//select[@id='current_module']"], 'Scholar');

// check the first book
$I->amOnPage('/student/library/bookshelf');
$I->makeScreenshot('scBookshelf'); 
$I->click(['xpath' => "//span[@id='1']"]);
$I->makeScreenshot('sdBook');
$I->click(['xpath' => "//input[@id='bookshelf']"]);

// check the first video
$I->amOnPage('/student/video/categories');
$I->makeScreenshot('seVideos'); 
$I->click(['xpath' => "//div[@id='36']"]);
$I->click(['xpath' => "//div[@id='1511']"]);
$I->seeElementInDOM(['xpath' => "//*[@id='mediaplayer-1']"]);
$I->makeScreenshot('sfVideo'); 

// check the first magazine
$I->amOnPage('/student/magazine/categories');
$I->makeScreenshot('sgMagezine_rack'); 
$I->click(['xpath' => "//span[@id='26']"]);
$I->click(['xpath' => "//div[@id='1440']"]);
$I->seeElementInDOM(['xpath' => "//*[@id='magazine-article']"]);
$I->makeScreenshot('shMagezine'); 
?>