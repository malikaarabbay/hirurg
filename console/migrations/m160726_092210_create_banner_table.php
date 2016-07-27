<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `banner`.
 */
class m160726_092210_create_banner_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%banner}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING,
            'photo' => Schema::TYPE_STRING,
            'link' => Schema::TYPE_STRING,
            'type_id' => Schema::TYPE_INTEGER,

            'is_published' => Schema::TYPE_SMALLINT . ' DEFAULT 0',
            'sort_index' => Schema::TYPE_INTEGER,
            'created' => Schema::TYPE_INTEGER,
            'updated' => Schema::TYPE_INTEGER,
            'deleted' => Schema::TYPE_SMALLINT . ' DEFAULT 0'

        ], $tableOptions);

        $this->batchInsert('{{%banner}}',
            ['title', 'photo', 'link', 'is_published'],
            [
                ['Название', 'sertificat.jpg', '/', '1'],
                ['Название', 'sertificat.jpg', '/', '1'],
                ['Название', 'sertificat.jpg', '/', '1'],
                ['Название', 'sertificat.jpg', '/', '1'],
                ['Название', 'sertificat.jpg', '/', '1'],
            ]
        );
    }

    public function down()
    {
        $this->dropTable('{{%banner}}');
    }
}
