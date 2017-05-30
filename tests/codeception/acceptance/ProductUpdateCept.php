<?php

use tests\codeception\_pages\PlacePage;
use tests\codeception\_pages\ProductPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$placePage = PlacePage::openBy($I);
$I->see('Places', 'h1');

$I->wantTo('ensure that I can update product');
$I->amGoingTo('try to create place name TEST-1');
$placePage->create('TEST-1');
$I->see('TEST-1', 'h1');
$I->click('Places');
$I->amGoingTo('try to create place name TEST-2');
$placePage->create('TEST-2');
$I->see('TEST-2', 'h1');

$I->amGoingTo('try to create product name TEST-PRODUCT-UPDATE');
$I->click("Create product");
$I->see('Create Product', 'h1');
$I->fillField('input[name="Product[name]"]', 'TEST-PRODUCT-UPDATE');
$I->selectOption('Product[place_id]', 'TEST-1');
$I->click('Create');
$I->see('TEST-PRODUCT-UPDATE', 'h1');
$I->see('TEST-1');

$I->amGoingTo('try to update TEST-PRODUCT-UPDATE');
$I->click('Update');
$I->fillField('input[name="Product[name]"]', 'TEST-PRODUCT-UPDATE');
$I->selectOption('Product[place_id]', 'TEST-2');
$I->click('Update');
$I->see('TEST-PRODUCT-UPDATE', 'h1');
$I->see('TEST-2');

