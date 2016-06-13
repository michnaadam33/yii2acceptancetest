<?php

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('Find system');
$I->seeLink('About');
$I->click('About');
$I->see('Wykonał Adam Michna');
