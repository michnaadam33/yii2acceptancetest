<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {role}',
                'buttons' => [
                    'role' => function ($url, $model) {
                        $auth = Yii::$app->authManager;
                        if($auth->checkAccess($model->id,'admin')){
                            return Html::a('<span class="glyphicon glyphicon-minus-sign"></span>', $url, [
                                'title' => Yii::t('app', 'Remove admin'),
                            ]);
                        }
                        return Html::a('<span class="glyphicons glyphicon-plus-sign"></span>', $url, [
                            'title' => Yii::t('app', 'Add admin'),
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>
</div>
