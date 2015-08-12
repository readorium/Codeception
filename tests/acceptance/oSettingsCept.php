<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('test the settings page');
$I->loadSessionSnapshot('login');

$I->amOnPage('/student/library');

$I->click(['xpath' => "//li[@id='settings']"]);
$I->makeScreenshot('suSettings');
?>