<?php

use yii\db\Migration;

/**
 * Handles the creation for table `comment`.
 */
class m160725_113059_create_comment_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'firstname' => $this->string(),
            'secondname' => $this->string(),
            'comment' => $this->text(),
            'created' => $this->integer(),
            'updated' => $this->integer(),
            'is_published' => $this->smallInteger()->defaultValue(0),
        ]);

        $this->batchInsert('{{%comment}}',
            ['article_id', 'firstname', 'secondname', 'comment', 'created', 'updated', 'is_published'],
            [
                ['1', 'malika', 'arabbay', 'Отличный сервис.', time(), time(), 1],
                ['2', 'dina', 'mirova', 'Хорошие цени.', time(), time(), 1]
            ]
        );
    }

    public function down()
    {
        $this->dropTable('{{%comment}}');
    }
}
