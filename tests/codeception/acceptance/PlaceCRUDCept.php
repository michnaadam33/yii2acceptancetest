<?php

use tests\codeception\_pages\PlacePage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$placePage = PlacePage::openBy($I);
$I->see('Places', 'h1');

$I->wantTo('ensure that I can create, update and delete place');
$I->amGoingTo('try to create place empty name');
$placePage->create('');
$I->see('Name cannot be blank.');
$I->click('Places');

$I->amGoingTo('try to create place name TEST');
$placePage->create('TEST');
$I->see('TEST', 'h1');

$I->amGoingTo('try to update place');
$placePage->update('');
$I->see('Name cannot be blank.');
$placePage->update('TEST2');
$I->see('TEST2', 'h1');

$I->amGoingTo('try to delete place');
$placePage->delete();
$I->see("No results found.");


