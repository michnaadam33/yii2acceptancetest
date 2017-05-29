<?php
new yii\web\Application(require(dirname(__DIR__) . '/config/acceptance.php'));

Yii::$app->db->createCommand('set foreign_key_checks=0')->execute();
Yii::$app->db->createCommand()->truncateTable('product')->execute();
Yii::$app->db->createCommand()->truncateTable('place')->execute();
Yii::$app->db->createCommand('set foreign_key_checks=1')->execute();

