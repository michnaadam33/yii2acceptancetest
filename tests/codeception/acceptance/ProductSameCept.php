<?php

use tests\codeception\_pages\ProductPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$productPage = ProductPage::openBy($I);
$I->see('Products', 'h1');

$I->wantTo('ensure that I can not create the same product name');
$I->amGoingTo('try to create product name TEST');
$productPage->create('TEST', 2);
$I->see('TEST', 'h1');
$I->click('Products');
$productPage->create('TEST', 2);
$I->see('Name "TEST" has already been taken.');

