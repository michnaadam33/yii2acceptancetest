<?php
new yii\web\Application(require(dirname(__DIR__) . '/config/acceptance.php'));

Yii::$app->db->createCommand('set foreign_key_checks=0')->execute();
Yii::$app->db->createCommand()->truncateTable('product')->execute();
Yii::$app->db->createCommand()->truncateTable('place')->execute();
Yii::$app->db->createCommand()->truncateTable('user')->execute();
Yii::$app->db
    ->createCommand('INSERT INTO `user` (`id`, `username`,  `password_hash`) VALUES (1,"adam", "$2y$13$H3TNYg1lSslWr3iSPbLEk.cPR4VXO8.2MLrL8CH1ZJmqTHRTq8orq");')
->execute();
Yii::$app->db->createCommand('set foreign_key_checks=1')->execute();

