<?php

namespace tests\codeception\_pages;

use yii\codeception\BasePage;

/**
 * Represents login page
 * @property \AcceptanceTester|\FunctionalTester $actor
 */
class UserPage extends BasePage
{
    public $route = 'user/index';

    public function create($username, $password)
    {
        $this->actor->click('Create User');
        $this->actor->fillField('input[name="User[username]"]', $username);
        $this->actor->fillField('input[name="User[password]"]', $password);
        $this->actor->click('Create');
    }

    public function update($username, $password)
    {
        $this->actor->click('Update');
        $this->actor->fillField('input[name="User[username]"]', $username);
        $this->actor->fillField('input[name="User[password]"]', $password);
        $this->actor->click('Update');
    }

    public function delete()
    {
        $this->actor->click('Delete');
    }
}
