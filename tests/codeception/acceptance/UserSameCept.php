<?php

use tests\codeception\_pages\UserPage;
use tests\codeception\_pages\LoginPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$loginPage = LoginPage::openBy($I);

$I->see('Login', 'h1');

$I->amGoingTo('try to login');
$loginPage->login('adam', 'adam');
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see user info');
$I->see('Logout (adam)');
$I->am('admin');

$userPage = UserPage::openBy($I);
$I->see('Users', 'h1');

$I->wantTo('ensure that I can not create the same user name');
$I->amGoingTo('try to create user name TEST');
$userPage->create('TEST','TEST');
$I->see('TEST', 'h1');
$I->click('Users');
$userPage->create('TEST','TEST');
$I->see('Name "TEST" has already been taken.');
