<?php

use yii\db\Migration;

/**
 * Class m241015_094325_company
 */
class m241015_094325_company extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'address' => $this->string(50)->notNull(),
            'phone' => $this->string(50)->notNull(),
            'created'=>$this->integer()->notNull(),
            'status'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241015_094325_company cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241015_094325_company cannot be reverted.\n";

        return false;
    }
    */
}
