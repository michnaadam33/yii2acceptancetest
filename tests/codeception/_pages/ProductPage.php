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

    public function update($name)
    {
        $this->actor->click('Update');
        $this->actor->fillField('input[name="Product[name]"]', $name);
        $this->actor->click('Update');
    }

    public function delete()
    {
        $this->actor->click('Delete');
    }
}
