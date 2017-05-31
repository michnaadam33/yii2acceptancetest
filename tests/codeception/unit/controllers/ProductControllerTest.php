<?php

namespace tests\codeception\unit\controllers;

use app\controllers\ProductController;
use Codeception\Specify;
use yii\codeception\TestCase;
use Mockery as m;

/**
 * PlaceController implements the CRUD actions for Place model.
 */
class ProductControllerTest extends TestCase
{
    use Specify;

    public function testActionRole()
    {
        $module = m::mock('\yii\base\Module');
        /** @var ProductController $controller */
        $controller = \Yii::createObject(ProductController::class,[
            'user',
            $module,
        ]);

        $this->specify('Check product controller', function () use ($controller) {
            expect('behaviors', $controller->behaviors())->internalType('array');
        });
    }
}
