<?php

namespace tests\codeception\unit\models;

use app\models\Place;
use app\models\Product;
use app\models\User;
use Codeception\Specify;
use yii\codeception\TestCase;

class ProductTest extends TestCase
{
    use Specify;

    public function testProductCorrect()
    {
        $model = new Product([
            'name' => 'TEST-UNIT',
            'place_id' => 1
        ]);

        $this->specify('Check product model', function () use ($model) {
            expect('fields', $model->fields())->internalType('array');
            expect('validate', $model->validate())->false();
            expect('error', $model->getErrors())->hasKey('place_id');
        });
    }
}
