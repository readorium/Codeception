<?php

/**
 *  Acceptance test for the Readorium Quiz Bowl screen.
 * 
 *  @author Andrew Lee
 */
$I = new AcceptanceTester($scenario);

//  Set up
$I->loadSessionSnapshot('login');
$I->am('student');
$I->wantTo('make sure the quiz bowl screen displays correctly');

//  Navigate to page and confirm things look right
$I->amOnPage('/student/quiz_bowl'); 
$I->seeInTitle('Rising Reader Quiz Bowl');
$I->seeElement("//input[@value = 'Earth Science']");
$I->makeScreenshot('smQuiz_bowl'); 

//  Open page 1 and make it looks right
$I->click(['xpath' => "//input[@value = 'Earth Science']"]);
$I->makeScreenshot('snQb_page1'); 
//  Back to Categories and check page 2
$I->click(['xpath' => "//input[@value = 'Back to Categories']"]);
// $I->makeScreenshot('oQb_page2'); 
//  Press the back button to return to the village
$I->click(['xpath' => "//input[@value = 'Back']"]);

$I->seeInCurrentURL('/student/village');

?>