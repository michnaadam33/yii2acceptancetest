<?php

namespace tests\codeception\unit\models;

use app\models\User;
use yii\codeception\TestCase;

class UserTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    function testSavingUser()
    {
        $user = new User();
    }
}
