<?php

use tests\codeception\_pages\PlacePage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that login works');

$loginPage = PlacePage::openBy($I);

$I->see('Places', 'h1');

$I->amGoingTo('try to create place');
$loginPage->goCreate();
$I->see('Create Place', 'h1');

$I->click('Create');
$I->see('Name cannot be blank.');
$I->fillField('#place-name', 'TEST');
$I->click('Create');
$I->see('TEST', 'h1');

$I->amGoingTo('try to update place');
$I->click('Update');
$I->see('Update Place: TEST');
$I->fillField('#place-name', 'TEST2');
$I->click('Update');
$I->see('TEST2', 'h1');