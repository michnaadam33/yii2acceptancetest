<?php

namespace tests\codeception\unit\models;

use app\models\Place;
use app\models\User;
use yii\codeception\TestCase;
use yii\rbac\Role;

class RoleTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        // uncomment the following to load fixtures for user table
        //$this->loadFixtures(['user']);
    }

    function testSavingUser()
    {
        $role = new Role();
    }
}
