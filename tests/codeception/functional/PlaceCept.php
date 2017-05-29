<?php


use tests\codeception\_pages\LoginPage;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that login works');

$loginPage = LoginPage::openBy($I);

$I->see('Login', 'h1');

$I->amGoingTo('try to login');
$loginPage->login('adam', 'adam');
$I->see('Place');

$placePage = \tests\codeception\_pages\PlacePage::openBy($I);
$placePage->create("test");
$I->see('test');
$I->click('About');