<?php

use tests\codeception\_pages\PlacePage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$placePage = PlacePage::openBy($I);
$I->see('Places', 'h1');

$I->wantTo('ensure that I can not create the same place name');
$I->amGoingTo('try to create place name TEST');
$placePage->create('TEST');
$I->see('TEST', 'h1');
$I->click('Places');
$placePage->create('TEST');
$I->see('Place name "TEST" has already been taken.');