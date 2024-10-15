<?php

use yii\db\Migration;

/**
 * Class m241015_094315_visit_log
 */
class m241015_094315_visit_log extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('visit_log', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer()->notNull(),
            'enter_time' => $this->integer()->notNull(),
            'exit_time' => $this->integer()->notNull(),
            'real_enter_time' => $this->integer()->notNull(),
            'real_exit_time' => $this->integer()->notNull(),
            'manual_enter_time' => $this->integer()->notNull(),
            'manual_exit_time' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'company_id' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
            'terminal_enter'=>$this->integer()->notNull(),
            'terminal_exit'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241015_094315_visit_log cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241015_094315_visit_log cannot be reverted.\n";

        return false;
    }
    */
}
