<?php

use yii\db\Schema;
use yii\db\Migration;

class m160109_174513_create_article_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->defaultValue(0),
            'title' => $this->string(),
            'anounce' => $this->text(),
            'description' => $this->text(),
            'photo' => $this->string(),

            'views' => $this->integer()->defaultValue(0),
            'lang_id' => $this->integer(),
            'is_published' => $this->integer()->defaultValue(0),
            'sort_index' => $this->integer(),

            'created' => $this->integer(),
            'updated' => $this->integer(),
            'created_user_id' => $this->integer(),
            'updated_user_id' => $this->integer(),

            'slug' => $this->string(),
            'meta_title' => $this->string(),
            'meta_keywords' => $this->string(),
            'meta_description' => $this->string(),

        ], $tableOptions);

        $this->batchInsert('{{%article}}',
            ['title', 'category_id', 'anounce', 'description', 'photo','created', 'updated', 'slug','is_published'],
            [
                ['Атеросклероз сосудов', 2, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'arteskleroz-sosudov', 1],
                ['Аневризма брюшной аорты', 2, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'anevrizma-bryushnoi-aorty', 1],
                ['Облитерирующий атеросклероз артерий нижних конечностей', 2, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'obliteriruyushiy-aterokleroz', 1],
                ['Атеросклероз сонных артерий', 2, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'aterokleroz-sonnih', 1],
                ['Сахарный диабет и диабетическая стопа', 2, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'saharniy-diabet', 1],
                ['Болезнь и синдром Рейно', 2, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'bolezn-i-sindrom-reyno', 1],
                ['Гангрена нижних конечностей', 2, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'gangrena-nijnih-konechnostey', 1],

                ['Болезни вен', 1, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'bolezni-ven', 1],
                ['Трофические язвы', 1, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'troficheskiye-yazvy', 1],
                ['Диагностика', 1, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'diagnoztika', 1],
                ['Цены', 1, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'seny', 1],
                ['О клинике', 1, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'o-klinike', 1],
                ['Контакты', 1, 'Анонс контента' , 'Описание контента' , 'article.jpg', time(), time(), 'contacts', 1],
            ]
        );


    }

    public function down()
    {
        $this->dropTable('{{%article}}');
    }

}
