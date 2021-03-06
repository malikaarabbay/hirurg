<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use vova07\fileapi\Widget as FileAPI;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-md-8 col-xs-12">

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->widget(Widget::className(), [
                'settings' => [
                    'lang' => 'ru',
                    'minHeight' => 300,
                    'imageUpload' => Url::to(['/site/image-upload']),
                    'imageManagerJson' => Url::to(['/site/images-get']),
                    'plugins' => [
                        'imagemanager'
                    ]
                ]
            ]); ?>

            <?= $form->field($model, 'is_published')->checkbox() ?>

        </div>

        <div class="col-md-4 col-xs-12">

            <?= $form->field($model, 'photo')->widget(
                FileAPI::className(),
                [
                    'settings' => [
                        'url' => ['fileapi-upload'],
                        'elements' => [
                            'preview' => [
                                'width' => 250,
                                'height' => 200
                            ]
                        ],
                    ],
                ])
            ?>
            
            <?= $form->field($model, 'meta_title')->textInput(['maxlength' => 255]) ?>

            <?= $form->field($model, 'meta_keywords')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'meta_description')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
