<?php
// дизайн с круглыми картинками. вертикальный скроллинг.
use \app\components\ArchiUrl;
?>

<?php 
$script = <<< JS
let allowed_rows_in_block_2 = $block_scroll_2_rows;    
JS;
$this->registerJs($script, yii\web\View::POS_HEAD);
?>

<section class="objects" id="section_<?=$block_id?>">
    <h2><?=$block_title?></h2>
    <div class="objects__container">
        <div class="objects__container_list_2">
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
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <div class="details">
            <div class="details__button" style="display: block;"><img src="//test.archi.ru/css/n/info_project/img/details.png" alt="Показать еще"></div>
            <div class="details__link_wrap"><div class="details__link" style="display: block;"><a href="/">еще материалы</a></div></div>   
        </div>
    </div>
</section>