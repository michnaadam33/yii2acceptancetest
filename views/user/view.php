<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger'
        ]) ?>
    </p>
    <p>
        <?php if(Yii::$app->authManager->checkAccess($model->id,'admin')) : ?>
            <?= Html::a('Remove admin', ['user/role', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
        <?php else: ?>
            <?= Html::a('Add admin', ['user/role', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?php endif;?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'role'
        ],
    ]) ?>

</div>
