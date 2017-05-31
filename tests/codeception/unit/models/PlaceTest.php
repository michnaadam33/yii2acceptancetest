<?php

namespace tests\codeception\unit\models;

use app\models\Place;
use app\models\User;
use Codeception\Specify;
use yii\codeception\TestCase;

class PlaceTest extends TestCase
{
    use Specify;

    public function testPlaceCorrect()
    {
        $model = new Place([
            'name' => 'TEST-UNIT'
        ]);

        $this->specify('Check place model', function () use ($model) {
            expect('fields', $model->fields())->internalType('array');
            expect('validate', $model->validate())->true();
            expect('error', $model->getErrors())->hasntKey('name');
        });
    }
}
