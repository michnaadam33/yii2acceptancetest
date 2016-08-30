<?php

use yii\db\Migration;

/**
 * Handles the creation for table `place`.
 */
class m160830_164426_create_place extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('place', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('place');
    }
}
