<?php
$I = new AcceptanceTester($scenario);
$I->am('student');
$I->wantTo('ensure that frontpage works');
$I->amOnPage('/');
$I->makeScreenshot('aLogin'); 

//Testing all the text fields
$I->seeInTitle('Readorium Student Login');
$I->seeLink('username');
$I->seeLink('password');

//Fill fields
$I->fillField(['xpath' => "//input[@name='userid']"], 'juth');
$I->fillField(['xpath' => "//input[@name='password']"], 'r3aD0riUm');
$I->fillField(['xpath' => "//input[@name='classroomid']"], '1');
$I->click('Login');
$I->makeScreenshot('bLibrary'); 

$I->saveSessionSnapshot('login');
?>