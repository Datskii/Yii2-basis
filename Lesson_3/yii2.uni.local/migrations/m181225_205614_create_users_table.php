<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m181225_205614_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login'=> $this->string()->notNull(),
            'email'=> $this->string()->notNull(),
            'password'=> $this->string(),
        ]);
        $this->addForeignKey(
            'fk_tasks_users_responsible',
            'tasks',
            'responsible_id',
            'users',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
