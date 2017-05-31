<?php

namespace tests\codeception\unit\controllers;

use app\controllers\UserController;
use Codeception\Module\Yii2;
use Codeception\Specify;
use Codeception\Util\MockAutoload;
use yii\codeception\TestCase;
use Mockery as m;

class UserControllerTest extends TestCase
{
    use Specify;

    public function testActionRole()
    {
        $module = m::mock('\yii\base\Module');
        /** @var UserController $controller */
        $controller = \Yii::createObject(UserController::class,[
            'user',
            $module,
        ]);

        $this->specify('Check user controller', function () use ($controller) {
            expect('behaviors', $controller->behaviors())->internalType('array');
        });
    }
}
