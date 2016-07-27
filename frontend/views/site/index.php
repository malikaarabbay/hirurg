<?php
/* @var $this yii\web\View */
$this->title = 'Хирург';
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class = 'iosSlider'>
    <div class = 'slider'>
        <div class = 'item' id = 'item1'>
            <div class = 'text1'><span> <a href="">Парманов Айдар Толегенович</a></span></div>
            <div class = 'text2'><span>Ведущий хирург клиники</span></div>
        </div>
        <div class = 'item' id = 'item2'>
            <div class = 'text1'><span> <a href="">Парманов Айдар Толегенович</a></span></div>
            <div class = 'text2'><span>Ведущий хирург клиники</span></div>
        </div>
        <div class = 'item' id = 'item3'>
            <div class = 'text1'><span> <a href="">Парманов Айдар Толегенович</a></span></div>
            <div class = 'text2'><span>Ведущий хирург клиники</span></div>
        </div>
        <div class = 'item' id = 'item4'>
            <div class = 'text1'><span> <a href="">Парманов Айдар Толегенович</a></span></div>
            <div class = 'text2'><span>Ведущий хирург клиники</span></div>
        </div>
    </div>
    <!--<div class = 'iosSliderButtons'>-->
    <!--<div class = 'button'></div>-->
    <!--<div class = 'button'></div>-->
    <!--<div class = 'button'></div>-->
    <!--<div class = 'button'></div>-->
    <!--</div>-->
</div>
<div class="border-line">
    <div class="xirurg">
    </div>
</div>
<div class="cr">
    <div class="otdelenie_xirugi">
        <div class="otdelenie_xirugi_title">
            <h2>ОТДЕЛЕНИЕ СУСТАВНОЙ ХИРУРГИИ</h2>
            многопрофильной клиники в Астане – это
        </div>
        <div class="preimushestvo_list">
            <div class="preimushestvo_item">
                <div class="pre_item_icon">
                    16
                </div>
                лет успешной<br>
                работы
            </div>
            <div class="preimushestvo_item">
                <div class="pre_item_icon">
                    3
                </div>
                квалифицированных<br>
                хирургов, ортопедов,<br>
                физиологов
            </div>
            <div class="preimushestvo_item">
                <div class="pre_item_icon">
                    16
                </div>
                лет стаж работы<br>
                каждого специалиста
            </div>
            <div class="preimushestvo_item">
                <div class="pre_item_icon">
                    10
                </div>
                видов услуг<br>
                по восстановлению<br>
                суставов
            </div>
            <div class="preimushestvo_item">
                <div class="pre_item_icon">
                    895
                </div>
                видов услуг<br>
                по восстановлению<br>
                суставов
            </div>
        </div>
    </div>
</div>
<div class="about_compani">
    <div class="cr">
        <div class="title">
            <h2><?= \common\models\Text::getValue('main_article_title');?></h2>
        </div>
        <?= \common\models\Text::getValue('main_article_desc');?>
        <a href="<?= Url::toRoute(['/article/o-klinike']) ?>" class="button">
            Читать полностью
        </a>
    </div>
</div>
<div class="cr">
    <div class="stroenie">
        <div class="chelovek_img">
            <div class="chel_img_pos"><img src="img/chel.png" alt="">

                <a href="" class="chel_items suzhenie_sonnix_arterii" date-title="Сужение сонных артерии">
                    <div class="chel_item">
                    </div>
                </a>
                <a href="" class="chel_items trombi" date-title="Тромбы (онемение, похолдание)">
                    <div class="chel_item "></div>
                </a>
                <a href="" class="chel_items troficheskie_iazvi" date-title="Трофические язвы">
                    <div class="chel_item ">
                    </div>
                </a>
                <a href="" class="chel_items bol_v_oblasti_zhivota" date-title="Боль в области живота">
                    <div class="chel_item ">
                    </div>
                </a>
                <a href="" class="chel_items right trombi_right" date-title="Тромбы (онемение, похолдание)">
                    <div class="chel_item "></div>
                </a>
                <a href="" class="chel_items right troficheskie_iazvi_right" date-title="Трофические язвы">
                    <div class="chel_item ">
                    </div>
                </a>
                <a href="" class="chel_items bol_onimenie_nizhnix_konechnosti " date-title="Боль, онемение нижних конечностей">
                    <div class="chel_item ">
                    </div>
                </a>
                 <a href="" class="chel_items bol_onimenie_nizhnix_konechnosti_right " date-title="Боль, онемение нижних конечностей">
                    <div class="chel_item ">
                    </div>
                </a>
                <a href="" class="chel_items varikoz_tromboz_ven " date-title="Варикоз, тромбоз вен">
                    <div class="chel_item ">
                    </div>
                </a>
                <a href="" class="chel_items varikoz_tromboz_ven_right " date-title="Варикоз, тромбоз вен">
                    <div class="chel_item ">
                    </div>
                </a>
                <a href="" class="chel_items troficheskie_iazvi_nog " date-title="Трофические язвы">
                    <div class="chel_item ">
                    </div>
                </a>
                <a href="" class="chel_items troficheskie_iazvi_nog_right " date-title="Трофические язвы">
                    <div class="chel_item ">
                    </div>
                </a>
            </div>
        </div>
        <div class="text_chel">
            <div class="title_text_chel">
    Сосудистая система человека
            </div>
            <ul class="storenie_list">
                <li>
                    <div class="stroenie_title">
                        <strong>Болезни вен</strong>
                        <div class="sub_title_container">
                            <ul class="sub_title">
                              <li><a href="">Варикозное расширение вен</a></li>  
                              <li><a href="">Тромбозы глубоких вен</a></li>
                              <li><a href="">Тромбофлебит</a></li>
                              <li><a href="">Хроническая венозная недостаточность</a></li>
                            </ul>
                        </div>
                    </div>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC,
                        making it over 2000 years old.</p>
                </li>
                <li>
                    <div class="stroenie_title">
                        <strong>Болезни артерий</strong>
                        <div class="sub_title_container">
                            <ul class="sub_title">
                              <li><a href="">Атеросклероз</a></li>  
                              <li><a href="">Эндоартериат</a></li>
                            </ul>
                        </div>
                    </div>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC,
                        making it over 2000 years old.</p>
                </li>
                <li>
                    <div class="stroenie_title">
                        <strong>Трофические язвы</strong>
                        <div class="sub_title_container">
                            <ul class="sub_title">
                              <li><a href="">Венозные язвы</a></li>  
                              <li><a href="">Артериальные язвы</a></li>
                            </ul>
                        </div>
                    </div>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC,
                        making it over 2000 years old.</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="treatment_steps_container">
    <div class="cr">
        <div class="otdelenie_xirugi_title">
            <h2>КАК ПРОХОДИТ ЛЕЧЕНИЕ</h2>
            ОТДЕЛЕНИИ АРТРОСКОПИИ И СУСТАВНОЙ ХИРУРГИИ<br>
            МНОГОПРОФИЛЬНОЙ КЛИНИКИ
        </div>
        <ul class="steps">
            <li class="steps_item">
                <div class="step">
                    1
                </div>
                Вы записываетесь на<br>БЕСПЛАТНУЮ консультацию
            </li>
            <li class="steps_item">
                <div class="step">
                    2
                </div>
                На приеме врач определит<br> показания к хирургическому<br> лечению
            </li>
            <li class="steps_item">
                <div class="step">
                    3
                </div>
                Прохождение лечения<br>
                Выполнение <br>артроскопической операции
            </li>
            <li class="steps_item">
                <div class="step">
                    4
                </div>
                Реабилитация в течение <br>полугода у лечащего врача
            </li>
            <li class="steps_item">
                <div class="step">
                    5
                </div>
                Вы здоровы!
            </li>
        </ul>
        <a href="" class="button">
            Связаться с нами
        </a>
    </div>
</div>
<div class="cr">
    <div class="title">
        <h2>Сертификаты</h2>
    </div>
    <div class="sertificat_js">
                        <div class="sertificat_list-item">
                            <div class="sertificat_list">
                                <div class="sertificat_list">
                                    <a href="img/sertificat.jpg"class="fancybox"><img src="img/sertificat.jpg" alt="" ></a>
                                </div>
                            </div>
                        </div>
                        <div class="sertificat_list-item">
                            <div class="sertificat_list">
                                <div class="sertificat_list">
                                    <a href="img/sertificat.jpg"class="fancybox"><img src="img/sertificat.jpg" alt="" ></a>
                                </div>
                            </div>
                        </div>
                        <div class="sertificat_list-item">
                            <div class="sertificat_list">
                                <div class="sertificat_list">
                                    <a href="img/sertificat.jpg"class="fancybox"><img src="img/sertificat.jpg" alt="" ></a>
                                </div>
                            </div>
                        </div>
                        <div class="sertificat_list-item">
                            <div class="sertificat_list">
                                <div class="sertificat_list">
                                    <a href="img/sertificat.jpg"class="fancybox"><img src="img/sertificat.jpg" alt="" ></a>
                                </div>
                            </div>
                        </div>
                        <div class="sertificat_list-item">
                            <div class="sertificat_list">
                                <div class="sertificat_list">
                                    <a href="img/sertificat.jpg"class="fancybox"><img src="img/sertificat.jpg" alt="" ></a>
                                </div>
                            </div>
                        </div>
                        <div class="sertificat_list-item">
                            <div class="sertificat_list">
                                <div class="sertificat_list">
                                    <a href="img/sertificat.jpg"class="fancybox"><img src="img/sertificat.jpg" alt="" ></a>
                                </div>
                            </div>
                        </div>
                        <div class="sertificat_list-item">
                            <div class="sertificat_list">
                                <div class="sertificat_list">
                                    <a href="img/sertificat.jpg"class="fancybox"><img src="img/sertificat.jpg" alt="" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
</div>