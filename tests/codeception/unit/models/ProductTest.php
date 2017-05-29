<?php

namespace tests\codeception\unit\models;

use app\models\Place;
use app\models\Product;
use app\models\User;
use yii\codeception\TestCase;

class ProductTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        // uncomment the following to load fixtures for user table
        //$this->loadFixtures(['user']);
    }

    function testSavingUser()
    {
        $place = new Product();
    }
}
