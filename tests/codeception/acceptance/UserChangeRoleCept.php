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

$I->wantTo('ensure that I create user role user and change role');
$I->amGoingTo('try to create user name TEST-USER');
$userPage->create('TEST-USER','TEST-USER');
$I->see('TEST-USER', 'h1');
$I->see('USER_ROLE', 'td');

$I->click('Add admin');
$I->see('ADMIN_ROLE', 'td');
$I->click('Remove admin');
$I->see('USER_ROLE', 'td');

