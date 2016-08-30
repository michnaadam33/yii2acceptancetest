<?php

use tests\codeception\_pages\ProductPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that login works');

$loginPage = ProductPage::openBy($I);

$I->see('Products', 'h1');

$I->amGoingTo('try to create product');
$loginPage->goCreate();
$I->see('Create Product', 'h1');

$I->click('Create');
$I->see('Name cannot be blank.');
$I->fillField('#product-name', 'TEST');
$I->selectOption('Product[place_id]', 'TEST2');
$I->click('Create');
$I->see('TEST', 'h1');

$I->amGoingTo('try to update product');
$I->click('Update');
$I->see('Update Product: TEST');
$I->fillField('#product-name', 'TEST2');
$I->click('Update');
$I->see('TEST2', 'h1');

$I->amGoingTo('try to delete product');
$I->click('Delete');


