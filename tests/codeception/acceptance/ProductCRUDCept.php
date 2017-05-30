<?php

use tests\codeception\_pages\ProductPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that I can create, update and delete product');
$I->amGoingTo('try to create product');

$productPage = ProductPage::openBy($I);
$I->see('Products', 'h1');

$I->amGoingTo('try to create product');
$productPage->create('');
$I->see('Name cannot be blank.');
$I->click('Products');

$productPage->create('TEST');
$I->see('Place ID cannot be blank.');
$I->click('Products');

$productPage->create('TEST',2);
$I->see('TEST', 'h1');


$I->amGoingTo('try to update product');
$productPage->update('');
$I->see('Name cannot be blank.');
$I->moveBack(2);

$productPage->update('TEST3');
$I->see('Place ID cannot be blank.');
$I->moveBack(2);

$productPage->update('TEST2',2);
$I->see('TEST2', 'h1');

$I->amGoingTo('try to delete product');
$productPage->delete();
$I->see("No results found.");