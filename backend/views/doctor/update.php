<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Doctor',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="doctor-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
