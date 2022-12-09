<?php
// дизайн с круглыми картинками. горизонтальный скроллинг.
use \app\components\ArchiUrl;
?>
<?php
$this->registerJsFile(
    '@assetsUrl/js/slick/slick.min.js',
    ['depends' => ['yii\web\YiiAsset']]
);
$this->registerCssFile("@assetsUrl/js/slick/slick.css");
$this->registerCssFile("@assetsUrl/js/slick/slick-theme.css");

$script = <<< JS
let slick_properties_$block_id = new Object;
slick_properties_$block_id = 
   {
    dots: false,
    infinite: true,
    speed: 700,
    variableWidth: true,
    slidesToShow: 2,
    slidesToScroll: 2
   }
slick_properties_$block_id.responsive = [
    {
    breakpoint: 1024,
        settings: {
            dots: false,
            centerMode: true,
            infinite: true,
            speed: 700,
            slidesToShow: 2,
            slidesToScroll: 2
          }
    },
];
$('.objects__container_list').slick(slick_properties_$block_id);
    
JS;
$this->registerJs($script, yii\web\View::POS_END);
?>

<section class="objects" id="section_<?=$block_id?>">
        <h2><?=$block_title?></h2>
        <div class="objects__container">
            <div class="objects__container_list">
                <?php
                    $img_path = $rec_img_path . "280x280/";
                    foreach($block_data as $brd): 
                        $canonical_url = ArchiUrl::GetCanonicalUrl($brd->record_id, $brd->url_cpu, $brd->content_flow_id, $brd->country_id);
                ?>
                <div class="objects__list_item">
                    <h3><?=$brd->record_title_1 ?></h3>
                    <div class="objects__list_photo">
                        <?php if($brd->record_image_crop!=''): ?>
                        <a href="<?=$canonical_url?>">
                            <img src="<?php echo "$img_path$brd->record_image"; ?>" alt="pic" lazyloaded>
                        </a>
                        <?php else:?>
                        <h3 style="text-align: center;">НЕТ КАРТИНКИ! ПОДГОТОВЬТЕ КРОП</h3>
                        <?php endif;?>
                    </div>
                    <div class="objects__item_description">
                        <div class="objects__item_name"><?=$brd->record_title_2 ?></div>
                    <!--     
                        <div class="objects__item_name">RPBW</div>
                        <div class="objects__item_autor">Ренцо Пьяно</div>
                        <div class="objects__item_date">2014-2021</div>
                        <div class="objects__item_address">Москва</div>
                        <div class="objects__item_status">реализован</div>
                    -->
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>