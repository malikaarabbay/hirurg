<?php
use yii\helpers\Html;
use yii\helpers\Url;
use \yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$this->title = 'Болезни артерий';

$this->params['breadcrumbs'][] = 'Болезни артерий';
$this->registerMetaTag(['name'=> 'keywords', 'content' =>  '']);
$this->registerMetaTag(['name'=> 'description', 'content' => '']);

?>

<div class="container">
    <div class="cr">
        <div class="title_breadcrumbs">
            <h1>
                Болезни артерий
            </h1>
            <?= \yii\widgets\Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_item',
            'layout' => "{items}\n<div class='clearfix'></div>{pager}",
        ]) ?>
    </div>
</div>
