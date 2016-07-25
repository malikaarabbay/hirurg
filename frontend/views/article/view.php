<?php

$this->title = $model->title;

if($model->category_id == 2) {
    $this->params['breadcrumbs'][] = ['label' => 'Болезни артерий', 'url' => ['article/']];
    $this->params['breadcrumbs'][] = $model->title;
} else {
    $this->params['breadcrumbs'][] = $model->title;
}

$this->registerMetaTag(['name'=> 'keywords', 'content' =>  $model->meta_keywords]);
$this->registerMetaTag(['name'=> 'description', 'content' => $model->meta_description]);

?>

<div class="container">
    <div class="cr">
        <div class="title_breadcrumbs">
            <h1>
                <?= $model->title?>
            </h1>
                <?= \yii\widgets\Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
        </div>
    </div>
</div>