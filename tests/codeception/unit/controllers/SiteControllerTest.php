<?php

namespace tests\codeception\unit\controllers;

use app\controllers\PlaceController;
use app\controllers\SiteController;
use Codeception\Specify;
use yii\codeception\TestCase;
use Mockery as m;

/**
 * SiteController
 */
class SiteControllerTest extends TestCase
{
    use Specify;

    public function testActionRole()
    {
        $module = m::mock('\yii\base\Module');
        /** @var SiteController $controller */
        $controller = \Yii::createObject(SiteController::class,[
            'user',
            $module,
        ]);

        $this->specify('Check site controller', function () use ($controller) {
            expect('behaviors', $controller->behaviors())->internalType('array');
        });
    }
}
