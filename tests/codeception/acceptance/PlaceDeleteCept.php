<?php

use tests\codeception\_pages\PlacePage;
use tests\codeception\_pages\ProductPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$placePage = PlacePage::openBy($I);
$I->see('Places', 'h1');

$I->wantTo('ensure that I can not delete place with product');
$I->amGoingTo('try to create place name TEST-DELETE');
$placePage->create('TEST-DELETE');
$I->see('TEST-DELETE', 'h1');

$I->amGoingTo('try to create product name TEST-DELETE-PRODUCT');
$I->click("Create product");
$I->see('Create Product', 'h1');
$I->fillField('input[name="Product[name]"]', 'TEST-DELETE-PRODUCT');
$I->selectOption('Product[place_id]', 'TEST-DELETE');
$I->click('Create');
$I->see('TEST-DELETE-PRODUCT', 'h1');

$I->amGoingTo('try to delete place');
$I->moveBack(3);
$I->see('TEST-DELETE', 'h1');
$I->click('Delete');
$I->see('Error: Please, remove products from this place!');

$I->amGoingTo('try to delete product');
ProductPage::openBy($I);
$I->see('TEST-DELETE');
$I->click('Delete');

$I->amGoingTo('try to delete place');
$I->moveBack(3);
$I->see('TEST-DELETE', 'td');
$I->click('Delete');
$I->see('No results found.');
