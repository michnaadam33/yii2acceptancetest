<?php

namespace tests\codeception\unit\models;

use Yii;
use yii\codeception\TestCase;
use app\models\User;
use Codeception\Specify;

class UserTest  extends TestCase
{

    use Specify;

    public function testUserCorrect()
    {
        $model = new User([
            'username' => 'TEST-UNIT',
            'password' => 'TEST-UNIT'
        ]);

        $this->specify('Check user model', function () use ($model) {
            expect('fields', $model->fields())->internalType('array');
            expect('validate', $model->validate())->true();
            expect('role', $model->getRole())->equals('USER_ROLE');
        });
    }
}
