<?php

namespace app\controllers;

use Codeception\Specify;
use yii\codeception\TestCase;
use Yii;

class UserControllerTest extends TestCase
{

    protected function setUp()
    {
        parent::setUp();
    }

    use Specify;

    public function testActionRole()
    {
        $userController = new UserController('user', null);


    }
}
