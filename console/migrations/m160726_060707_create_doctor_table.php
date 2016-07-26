<?php

use yii\db\Migration;

/**
 * Handles the creation for table `doctor`.
 */
class m160726_060707_create_doctor_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%doctor}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'photo' => $this->string(),

            'is_published' => $this->integer()->defaultValue(0),

            'created' => $this->integer(),
            'updated' => $this->integer(),
            'created_user_id' => $this->integer(),
            'updated_user_id' => $this->integer(),

            'slug' => $this->string(),
            'meta_title' => $this->string(),
            'meta_keywords' => $this->string(),
            'meta_description' => $this->string(),

        ], $tableOptions);

        $this->batchInsert('{{%doctor}}',
            ['title', 'description', 'photo','created', 'updated', 'slug','is_published'],
            [
                ['Парманов Айдар', 'врач ультразвуковой диагностики, сосудистый хирург, кандидат медицинских наук, врач высшей квалификационной категории' , 'xirurg.png', time(), time(), 'parmanov-aydar', 1],
                ['Парманов Айдар', 'врач ультразвуковой диагностики, сосудистый хирург, кандидат медицинских наук, врач высшей квалификационной категории' , 'xirurg.png', time(), time(), 'parmanov-aydar1', 1],
                ['Парманов Айдар', 'врач ультразвуковой диагностики, сосудистый хирург, кандидат медицинских наук, врач высшей квалификационной категории' , 'xirurg.png', time(), time(), 'parmanov-aydar2', 1],
            ]
        );

    }

    public function down()
    {
        $this->dropTable('{{%doctor}}');
    }
}
