<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Url;
?>

<header>
    <div class="top_line">
        <div class="cr">
            <div class="top_container">
                <div class="top_container_item addres">
                    <?= \common\models\Text::getValue('address');?>
                </div>
                <div class="top_container_item phones">
                    <a href="tel:<?= \common\models\Text::getValue('first_phone');?>"><?= \common\models\Text::getValue('first_phone');?></a>,   <a href="tel:<?= \common\models\Text::getValue('second_phone');?>"> <?= \common\models\Text::getValue('second_phone');?></a>
                </div>
                <div class="top_container_item mail">
                    <a href="mailto:<?= \common\models\Text::getValue('email');?>"><?= \common\models\Text::getValue('email');?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cr">
        <div class="head">
            <div class="logo">
                <a href="/">
                    <img src="/img/logo.png" alt="">
                </a>
                <span>Центр сосудистой и<br>
                эндоваскулярной хирургии</span>
            </div>
            <div class="consultacia">
                <span>Консультация и запись на прием</span>
                <a href="tel:<?= \common\models\Text::getValue('third_phone');?>"><?= \common\models\Text::getValue('third_phone');?></a>
            </div>
            <div class="soc_seti">
                <span>Мы в соц. сетях:</span>
                <a target="_blank" href="<?= \common\models\Text::getValue('vk');?>"><img src="/img/vk.svg" alt=""></a>
                <a target="_blank" href="<?= \common\models\Text::getValue('youtube');?>"><img src="/img/youtube.svg" alt=""></a>
                <a target="_blank" href="<?= \common\models\Text::getValue('insta');?>"><img src="/img/insta.svg" alt=""></a>
            </div>
        </div>
    </div>
    <nav class="nav">
        <div class="cr">
            <ul class="menu">
                <li>
                    <a href="<?= Url::toRoute(['/']) ?>">Главная  </a>
                </li>
                <li class="sub_menu_link"><a>  Болезни вен</a>
                    <ul class="sub_menu">
                        <li><a href="">Варикозное расширение вен</a></li>  
                        <li><a href="">Тромбозы глубоких вен</a></li>
                        <li><a href="">Тромбофлебит</a></li>
                        <li><a href="">Хроническая венозная недостаточность</a></li>
                    </ul>
                </li>
                <li class="sub_menu_link"><a >Болезни артерий </a>
                    <?php $articles = \common\models\Article::find()->where(['is_published' => '1', 'category_id' => '2'])->orderBy('created DESC')->all()?>
                    <ul class="sub_menu">
                        <?php foreach($articles as $article){?>
                        <li><a href="<?= Url::toRoute(['/article/view', 'slug' => $article->slug]) ?>"><?=$article->title?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                
                <li class="sub_menu_link"><a > Трофические язвы </a>
                     <ul class="sub_menu">
                        <li><a href="">Венозные язвы</a></li>  
                        <li><a href="">Артериальные язвы</a></li>
                    </ul>
                </li>
                <li><a href="<?= Url::toRoute(['/article/diagnoztika']) ?>">Диагностика</a></li>
                <li><a href="<?= Url::toRoute(['/article/seny']) ?>">Цены  </a></li>
                <li><a href="<?= Url::toRoute(['/article/o-klinike']) ?>">О клинике</a></li>
                <li><a href="<?= Url::toRoute(['/article/contacts']) ?>">Контакты </a></li>
            </ul>
            <div class="mob_start"></div>
        </div>
    </nav>
</header>