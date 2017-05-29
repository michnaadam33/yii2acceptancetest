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

    public function create($name)
    {
        $this->actor->click('Create Place');
        $this->actor->fillField('input[name="Place[name]"]', $name);
        $this->actor->click('Create');
    }

    public function update($name)
    {
        $this->actor->click('Update');
        $this->actor->fillField('input[name="Place[name]"]', $name);
        $this->actor->click('Update');
    }

    public function delete()
    {
        $this->actor->click('Delete');
    }
}
