<?php
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;

$this->title = $model->title;

$this->params['breadcrumbs'][] = $model->title;

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
        <div class="content">
            <div class="content_item first_item">
                <?=
                EasyThumbnailImage::thumbnailImg(
                    $model->imagePath,
                    140,
                    145,
                    EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                    [
                        'alt' => $model->title,
                        'class' => ''
                    ]
                );
                ?>
            </div>
            <?= $model->description ?>
        </div>
        <aside class="side_bar">
            <?php foreach($doctors as $doctor){?>
                <a href="<?= Url::toRoute(['/doctor/view', 'slug' => $doctor->slug])?>">
                    <div class="side_bar_item">
                        <div class="side_bar_img">
                            <?=
                            EasyThumbnailImage::thumbnailImg(
                                $doctor->imagePath,
                                140,
                                145,
                                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                                [
                                    'alt' => $doctor->title,
                                    'class' => ''
                                ]
                            );
                            ?>
                        </div>
                        <div class="name_doc">
                            <?= $doctor->title ?>
                        </div>
                        <?= $doctor->description ?>
                    </div>
                </a>
            <?php } ?>
        </aside>
    </div>
</div>