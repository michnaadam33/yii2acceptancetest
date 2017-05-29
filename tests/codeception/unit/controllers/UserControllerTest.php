<?php

namespace app\controllers;

use Codeception\Specify;
use yii\codeception\TestCase;
use Yii;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserControllerTest extends TestCase
{
    protected function setUp()
{
    parent::setUp();
}

	use Specify;
    public function testAddRole()
    {

        $this->specify('user should not be able to add role', function () {
            expect('user should not be logged in', Yii::$app->user->isGuest)->true();
        });
    }
}
