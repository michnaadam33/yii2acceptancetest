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

    public function create($name, $optionNr=null)
    {
        $this->actor->click('Create Product');
        $this->actor->fillField('input[name="Product[name]"]', $name);
        if($optionNr){
            $option = $this->actor->grabTextFrom('#product-place_id option:nth-child('.$optionNr.')');
            $this->actor->selectOption('Product[place_id]', $option);
        }
        $this->actor->click('Create');
    }

    public function update($name, $optionNr=null)
    {
        $this->actor->click('Update');
        $this->actor->fillField('input[name="Product[name]"]', $name);
        if($optionNr){
            $option = $this->actor->grabTextFrom('#product-place_id option:nth-child('.$optionNr.')');
            $this->actor->selectOption('Product[place_id]', $option);
        }else {
            $option = $this->actor->grabTextFrom('#product-place_id option:nth-child(1)');
            $this->actor->selectOption('Product[place_id]', $option);
        }
        $this->actor->click('Update');
    }

    public function delete()
    {
        $this->actor->click('Delete');
    }
}
