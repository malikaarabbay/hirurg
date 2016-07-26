<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use vova07\fileapi\Widget as FileAPI;
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_id')->dropDownList(ArrayHelper::map(\common\models\Article::find()->where(['category_id' => '2'])->all(), 'id', 'title'),  ['prompt' => 'Без статьи'])->label('Статья') ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'comment')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 150,
            'imageUpload' => Url::to(['/site/image-upload']),
            'imageManagerJson' => Url::to(['/site/images-get']),
            'plugins' => [
                'imagemanager'
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'is_published')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
