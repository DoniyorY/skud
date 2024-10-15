<?php

use yii\db\Migration;

/**
 * Class m241015_094304_extra_phone
 */
class m241015_094304_extra_phone extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('extra_phone', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer()->notNull(),
            'phone' => $this->string(13)->notNull(),
            'content' => $this->string()->notNull(),
            'created'=>$this->integer()->notNull(),
            'status'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241015_094304_extra_phone cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241015_094304_extra_phone cannot be reverted.\n";

        return false;
    }
    */
}
