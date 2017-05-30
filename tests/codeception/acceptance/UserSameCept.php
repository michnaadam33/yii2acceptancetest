<?php

use tests\codeception\_pages\UserPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$userPage = UserPage::openBy($I);
$I->see('Users', 'h1');

$I->wantTo('ensure that I can not create the same user name');
$I->amGoingTo('try to create user name TEST');
$userPage->create('TEST','TEST');
$I->see('TEST', 'h1');
$I->click('Users');
$userPage->create('TEST','TEST');
$I->see('Name "TEST" has already been taken.');
