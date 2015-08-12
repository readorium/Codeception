<?php

/**
 *  Acceptance test for the Readorium Word Wizard World screen.
 * 
 *  @author Andrew Lee
 */
$I = new AcceptanceTester($scenario);

//  Set up
$I->loadSessionSnapshot('login');
$I->am('student');
$I->wantTo('make sure the word wizard world page displays correctly');

//  Navigate to page and confirm things look right
$I->amOnPage('/student/word_wizard_world'); 
$I->seeInTitle('Rising Reader Word Wizard World');

$I->seeElement('//input[@value = "Earth Science"]');
$I->makeScreenshot('skWord_wizard_world'); 

//  Check each category return back to the main screen
$I->click('//input[@value = "Earth Science"]');
$I->makeScreenshot('slWww_earth'); 

$I->click('//input[@value = "Back to Categories"]');
/* $I->click('//input[@value = "History and Nature of Science"]');
$I->makeScreenshot('www_history'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click('//input[@value = "Life Science"]');
$I->makeScreenshot('www_life'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click('//input[@value = "Physical Science"]');
$I->makeScreenshot('www_physical'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click('//input[@value = "Space Science"]');
$I->makeScreenshot('www_space'); 
$I->click('//input[@value = "Back to Categories"]'); */


?>
