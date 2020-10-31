<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m201031_160928_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'first_name' => $this->string(128)->notNull(),
            'middle_name' => $this->string(128),
            'last_name' => $this->string(128)->notNull(),
            'phone' => $this->string(128),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-profile-user_id}}',
            '{{%profile}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-profile-user_id}}',
            '{{%profile}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-profile-user_id}}',
            '{{%profile}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-profile-user_id}}',
            '{{%profile}}'
        );

        $this->dropTable('{{%profile}}');
    }
}
