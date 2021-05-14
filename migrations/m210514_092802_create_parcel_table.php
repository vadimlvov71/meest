<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%parcel}}`.
 */
class m210514_092802_create_parcel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%parcel}}', [
            'id' => $this->primaryKey(),
            'weight' => $this->string()->notNull(),
            'size' => $this->string()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'price' => $this->string()->notNull(),
            'status' => "set('unsent', 'sent', 'received') NOT NULL DEFAULT 'unsent'",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%parcel}}');
    }
}
