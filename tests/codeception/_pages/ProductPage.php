<?php

namespace tests\codeception\_pages;

use yii\codeception\BasePage;

/**
 * Represents about page
 * @property \AcceptanceTester|\FunctionalTester $actor
 */
class ProductPage extends BasePage
{
    public $route = 'product/index';

    public function goCreate()
    {
        $this->actor->click('Create Product');
    }
}
