<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%comment}}".
 *
 * @property integer $id
 * @property integer $article_id
 * @property string $firstname
 * @property string $secondname
 * @property string $comment
 * @property integer $created
 * @property integer $updated
 * @property integer $is_published
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'created', 'updated', 'is_published'], 'integer'],
            [['comment'], 'string'],
            [['firstname', 'secondname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'article_id' => Yii::t('app', 'Article ID'),
            'firstname' => Yii::t('app', 'Firstname'),
            'secondname' => Yii::t('app', 'Secondname'),
            'comment' => Yii::t('app', 'Comment'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'is_published' => Yii::t('app', 'Is Published'),
        ];
    }
}
