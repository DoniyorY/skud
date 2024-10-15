<?php

use yii\db\Migration;

/**
 * Class m241015_094256_students
 */
class m241015_094256_students extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('students', [
            'id'=>$this->primaryKey(),
            'fullname'=>$this->string(255)->notNull(),
            'phone'=>$this->string(255)->notNull(),
            'created'=>$this->integer(11)->notNull(),
            'image'=>$this->string(255)->notNull(),
            'status'=>$this->integer(11)->notNull(),
            'mother_name'=>$this->string(255)->notNull(),
            'father_name'=>$this->string(255)->notNull(),
            'address'=>$this->string(255)->notNull(),
            'company_id'=>$this->integer(11)->notNull(),
            'user_id'=>$this->integer(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241015_094256_students cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241015_094256_students cannot be reverted.\n";

        return false;
    }
    */
}
