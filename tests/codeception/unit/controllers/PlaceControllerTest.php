<?php

namespace tests\codeception\unit\controllers;

use app\controllers\PlaceController;
use Codeception\Specify;
use yii\codeception\TestCase;
use Mockery as m;

/**
 * PlaceController implements the CRUD actions for Place model.
 */
class PlaceControllerTest extends TestCase
{
    use Specify;

    public function testActionRole()
    {
        $module = m::mock('\yii\base\Module');
        /** @var PlaceController $controller */
        $controller = \Yii::createObject(PlaceController::class,[
            'user',
            $module,
        ]);

        $this->specify('Check product controller', function () use ($controller) {
            expect('behaviors', $controller->behaviors())->internalType('array');
        });
    }
}
