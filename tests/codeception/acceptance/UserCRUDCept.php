<?php

use tests\codeception\_pages\LoginPage;
use tests\codeception\_pages\UserPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that I can create, update and delete user');

$loginPage = LoginPage::openBy($I);

$I->see('Login', 'h1');

$I->amGoingTo('try to login');
$loginPage->login('adam', 'adam');
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see user info');
$I->see('Logout (adam)');

$I->amGoingTo('try to create user');
$userPage = UserPage::openBy($I);
$I->see('Users');
$userPage->create('','');
$I->see('Username cannot be blank.');
$I->see('Password cannot be blank.');
$I->moveBack(2);
$userPage->create('TEST','TEST');
$I->see('TEST', 'h1');

$I->amGoingTo('try to update user');
$userPage->update('','');
$I->see('Username cannot be blank.');
$I->see('Password cannot be blank.');
$userPage->update('TEST2', 'TEST2');
$I->see('TEST2', 'h1');

$I->amGoingTo('try to delete user');
$userPage->delete();
$I->see("Showing 1-1 of 1 item.");