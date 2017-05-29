<?php

use tests\codeception\_pages\PlacePage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that place works');

$placePage = PlacePage::openBy($I);

$I->see('Places', 'h1');

$I->amGoingTo('try to create place');
$placePage->create('');
$I->see('Create Place', 'h1');

$I->click('Create');
$I->see('Name cannot be blank.');

$I->fillField('#place-name', 'TEST');
$I->click('Create');
$I->see('TEST', 'h1');