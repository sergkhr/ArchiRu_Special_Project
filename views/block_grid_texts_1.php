<?php
use \app\components\ArchiDate;
use \app\components\ArchiUrl;
?>
<section class="article-grid-list" id="section_<?=$block_id?>">
    <div class="separate"></div>
    <h2><?=$block_title?></h2>
<?php 
$script = <<< JS
let allowed_rows_section_$block_id = $block_scroll_2_rows;    
JS;
$this->registerJs($script, yii\web\View::POS_HEAD);
?>        
    
    
    <div class="article-grid-list__container">
        <?php foreach($block_data as $brd): ?>
            <?php
            $add_class = "";
            if($brd->record_image_format==1){
                $img_path = $rec_img_path . "280x280/";
            }
            else{
                if($mobile_detect!=1){
                    $img_path = $rec_img_path . "580x280/";
                    $add_class = " rectangle";
                }
                else{
                    $img_path = $rec_img_path . "/280x280/";
                }
            }
            ?>
            <article class="article-grid-list__item<?=$add_class?>">
                <div class="article-grid-list__photo">
                    <?php 
                        $canonical_url = ArchiUrl::GetCanonicalUrl($brd->record_id, $brd->url_cpu, $brd->content_flow_id, $brd->country_id);
                    ?>
                   <a href="<?=$canonical_url?>">
                       <img src="<?php echo "$img_path$brd->record_image"; ?>" alt="pic" lazyloaded>
                   </a>
                </div>
                <header class="article-grid-list__item_title">
                    <h3><a href="<?=$canonical_url?>"><?=$brd->record_title ?></a></h3>
                </header>
                <div class="article-grid-list__item_intro"><?=$brd->announcement?></div>
                <div class="article-grid__info">
                    <?php if($brd->record_studio):?>
                    <ul class="article-grid-list__item_info">
                        <li><?=$brd->record_studio?></li>
                    </ul>
                    <?php endif; ?>
                    <ul class="article-grid-list__item_info_list">
                        <li> 
                            <date><?= ArchiDate::monthStrConvert($brd->record_date); ?></date>
                        <?php if($brd->record_author):?>
                            <span class="bg-author"><?=$brd->record_author?></span>
                        </li>
                        <?php endif;?>
                    </ul>
                </div>
            </article>                    
        <?php endforeach;?>
    </div>
    <div class="details">
        <div class="details__button"><img src="<?=$decor_img_path?>img/details.png" alt="Показать еще"></div>
        <div class="details__link_wrap"><div class="details__link"><a href="/">еще статьи</a></div></div>   
    </div>
</section>