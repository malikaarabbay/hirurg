<?php
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;

$this->title = $model->title;

if($model->category_id == 2) {
    $this->params['breadcrumbs'][] = ['label' => 'Болезни артерий'];
    $this->params['breadcrumbs'][] = $model->title;
} else {
    $this->params['breadcrumbs'][] = $model->title;
}

$this->registerMetaTag(['name'=> 'title', 'content' =>  $model->meta_title]);
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
            <?php if($model->category_id == 2) {?>
            <div class="content_item first_item">
                <?=
                EasyThumbnailImage::thumbnailImg(
                    $model->imagePath,
                    425,
                    255,
                    EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                    [
                        'alt' => $model->title,
                        'class' => ''
                    ]
                );
                ?>
                <p><?= $model->anounce ?></p>
                <a href="" class="button_bg">Записаться на прием</a>
            </div>
            <?php if($model->description) {?>
            <div class="content_item">
                <div class="title_breadcrumbs">
                    <h2>
                        Информация:
                    </h2>
                </div>
                <p><?= $model->description ?></p>
            </div>
            <?php } ?>
            <?php if($model->video) {?>
            <div class="content_item">
                <div class="title_breadcrumbs">
                    <h2>
                        Видео:
                    </h2>
                </div>
                <div class="video">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= $model->video ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <p><?= $model->video_desc ?></p>
            </div>
            <?php } ?>
            <div class="content_item">
                <div class="title_breadcrumbs">
                    <h2>
                        Поделиться в социальных сетях
                    </h2>
                </div>

            </div>
            <?php if($comments) {?>
            <div class="content_item">
                <div class="title_breadcrumbs">
                    <h2>
                        Отзывы |  <?= $model->title?>
                    </h2>
                </div>
                <ul class="reviews_list">
                    <?php foreach($comments as $comment){?>
                    <li>
                        <div class="name"><?= $comment->firstname ?></div>
                        <p><?= $comment->comment ?></p>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
            <?php } else {?>
                <?php if($model->slug !== 'seny') {?>
                    <?php if($model->photo) {?>
                    <div class="content_item first_item">
                        <?=
                        EasyThumbnailImage::thumbnailImg(
                            $model->imagePath,
                            425,
                            255,
                            EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                            [
                                'alt' => $model->title,
                                'class' => ''
                            ]
                        );
                        ?>
                    </div>
                    <?php } ?>
                <?php } ?>
                <div class="content_item">
                    <p><?= $model->description ?></p>
                </div>
            <?php } ?>
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