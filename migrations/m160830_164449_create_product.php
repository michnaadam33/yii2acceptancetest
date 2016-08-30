<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product`.
 */
class m160830_164449_create_product extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'place_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('place_product', 'product', 'place_id', 'place', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
