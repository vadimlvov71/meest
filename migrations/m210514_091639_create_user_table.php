<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210514_091639_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'address' => $this->string(),
            'phone_number' => $this->string()->notNull(),
            'role' => "set('client', 'administrator') DEFAULT 'administrator'",
            'auth_key' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
