<?php
$I = new AcceptanceTester($scenario);

$I->am('student');
$I->wantTo('check books, videos, and magazines');
$I->loadSessionSnapshot('login');

$I->selectOption(['xpath' => "//select[@id='current_module']"], 'Rising Reader');

// check the first book
$I->amOnPage('/student/library/bookshelf');
$I->makeScreenshot('rcBookshelf'); 
$I->click(['xpath' => "//span[@id='71']"]);
$I->makeScreenshot('rdBook');
$I->click(['xpath' => "//input[@id='bookshelf']"]);

// check the first video
$I->amOnPage('/student/video/categories');
$I->makeScreenshot('reVideos'); 
$I->click(['xpath' => "//div[@id='86']"]);
$I->click(['xpath' => "//div[@id='1779']"]);
$I->seeElementInDOM(['xpath' => "//*[@id='mediaplayer-1']"]);
$I->makeScreenshot('rfVideo'); 

// check the first magazine
$I->amOnPage('/student/magazine/categories');
$I->makeScreenshot('rgMagezine_rack'); 
$I->click(['xpath' => "//span[@id='79']"]);
$I->click(['xpath' => "//div[@id='1750']"]);
$I->seeElementInDOM(['xpath' => "//*[@id='magazine-article']"]);
$I->makeScreenshot('rhMagezine'); 
?>