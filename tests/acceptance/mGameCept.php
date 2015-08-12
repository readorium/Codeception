<?php

/**
 *  Acceptance test for the Readorium Game Garage screen.
 * 
 *  @author Andrew Lee
 */
$I = new AcceptanceTester($scenario);

//  Set up
$I->loadSessionSnapshot('login');
$I->am('student');
$I->wantTo('make sure the game garage page displays correctly');

//  Navigate to page and confirm things look right
$I->amOnPage('/student/game_garage'); 
$I->seeInTitle('Rising Reader Game Garage');
$I->seeElement("//div[@id='c2canvasdiv']/input[@type='button'][1]");
$I->makeScreenshot('spGame_garage'); 

//  Open the first game
$I->click(['xpath' => "//div[@id='c2canvasdiv']/input[@type='button'][1]"]);
$I->makeScreenshot('sqGg_game1'); 
//  Go back to main game page in order to test more games
$I->amOnPage('/student/game_garage'); 

// $I->click(['xpath' => "//div[@id='c2canvasdiv']/input[@type='button'][3]"]);
// $I->makeScreenshot('gg_game2'); 
// $I->amOnPage('/student/game_garage'); 

// $I->click(['xpath' => "//div[@id='c2canvasdiv']/input[@type='button'][4]"]);
// $I->makeScreenshot('gg_game3'); 
// $I->amOnPage('/student/game_garage'); 

//  Press the back button to return to the village
$I->click(['xpath' => "//div[@id='c2canvasdiv']/input[@type='button'][2]"]);


?>