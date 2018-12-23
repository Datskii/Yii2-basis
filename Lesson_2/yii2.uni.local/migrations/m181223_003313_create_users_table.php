<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m181223_003313_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'lastName'=> $this->string()->notNull(),
            'salary'=> $this->integer(),
        ]);
        $this->createIndex("ix_users_id","users","id");

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
