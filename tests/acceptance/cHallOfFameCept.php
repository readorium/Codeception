<?php

/**
 *  Acceptance test for the Readorium Hall of Fame screen.
 * 
 *  @author Andrew Lee
 */
$I = new AcceptanceTester($scenario);

//  Set up
$I->loadSessionSnapshot('login');
$I->am('student');
$I->wantTo('make sure the hall of fame page displays correctly');

//  Navigate to page and confirm things look right
$I->amOnPage('/student/hall_of_fame/display_records'); 

// $I->seeInTitle('Rising Reader Hall of Fame');

/*$I->seeElement(['xpath' => "//input[@value = 'Important!']"]);*/
$I->seeElement(['xpath' => "//input[@value = 'Your Classroom']"]);
$I->seeElement(['xpath' => "//input[@value = 'Your Teacher']"]);
$I->seeElement(['xpath' => "//input[@value = 'Your School']"]);
$I->seeElement(['xpath' => "//input[@value = 'Your District']"]);
$I->seeElement(['xpath' => "//input[@value = 'Your State']"]);
$I->seeElement(['xpath' => "//input[@value = 'Your Country']"]);
/*$I->seeElement(['xpath' => "//input[@value = 'Millionaire\'s Club']"]);*/
$I->seeElement(['xpath' => "//input[@value = 'Overall']"]);
$I->seeElement(['xpath' => "//input[@value = 'Return to Village']"]);
$I->makeScreenshot('riHall_of_fame'); 


//  Check a category and return back to the main screen
$I->click("//input[@value = 'Your Classroom']");
$I->makeScreenshot('rjHof_classroom'); 
$I->click('//input[@value = "Back to Categories"]');

/* $I->click("//input[@value = 'Your Teacher']");
$I->makeScreenshot('hof_teacher'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click("//input[@value = 'Your School']");
$I->makeScreenshot('hof_school'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click("//input[@value = 'Your District']");
$I->makeScreenshot('hof_district'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click("//input[@value = 'Your State']");
$I->makeScreenshot('hof_state'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click("//input[@value = 'Your Country']");
$I->makeScreenshot('hof_country'); 
$I->click('//input[@value = "Back to Categories"]');

$I->click("//input[@value = 'Millionaire\'s Club']");
$I->click('//input[@value = "Back to Categories"]');

$I->click("//input[@value = 'Overall']");
$I->makeScreenshot('hof_overall'); 
$I->click('//input[@value = "Back to Categories"]'); */
?>