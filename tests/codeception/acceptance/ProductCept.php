<?php

use tests\codeception\_pages\ProductPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that login works');

$productPage = ProductPage::openBy($I);

$I->see('Products', 'h1');

$I->amGoingTo('try to create product');
$productPage->goCreate();
$I->see('Create Product', 'h1');

$I->click('Create');
$I->see('Name cannot be blank.');
$I->fillField('#product-name', 'TEST');
$option = $I->grabTextFrom('Product[place_id] option:nth-child(1)');
$I->selectOption("select", $option);
$I->selectOption('Product[place_id]', $option);
$I->click('Create');
$I->see('TEST', 'h1');
