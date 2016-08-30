<?php

namespace tests\codeception\_pages;

use yii\codeception\BasePage;

/**
 * Represents login page
 * @property \AcceptanceTester|\FunctionalTester $actor
 */
class PlacePage extends BasePage
{
    public $route = 'place/index';

    public function goCreate()
    {
        $this->actor->click('Create Place');
    }
}
