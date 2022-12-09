<?php
use \app\components\ArchiDate;
use \app\components\ArchiUrl;
?>
<?php
$this->registerJsFile(
    '@assetsUrl/js/slick/slick.min.js',
    ['depends' => ['yii\web\YiiAsset']]
);
//$this->registerCssFile("@assetsUrl/js/slick/slick.css");
//$this->registerCssFile("@assetsUrl/js/slick/slick-theme.css");

$script = <<< JS
let slick_properties_$block_id = new Object;

slick_properties_$block_id = 
   {
    dots: false,
    infinite: true,
    speed: 700,
    centerMode: true,
    variableWidth: true,
    initialSlide: 0,
    slidesToShow: 2,
    slidesToScroll: 2
   }
        
$('.articles__container_list_2').slick(slick_properties_$block_id);
    
JS;
$this->registerJs($script, yii\web\View::POS_END);
?>


<section class="objects" id="section_<?=$block_id?>">
    <h2><?=$block_title?></h2>
    <div class="articles__container_list_2">
            <?php
                foreach($block_data as $brd): 
                    $add_class = " square";
                    if($brd->record_image_format==1){
                        $img_path = $rec_img_path . "280x280/";
                    }
                    else{
                        if($mobile_detect!=1){
                            $img_path = $rec_img_path . "580x280/";
                            //$img_path = $rec_img_path . "280x280/"; // remove
                            $add_class = " rectangle";
                        }
                        else{
                            $img_path = $rec_img_path . "/280x280/";
                        }
                    }
            ?>
            
            
                <article class="article__item<?=$add_class?>">
                    <div class="article__item__photo">
                        <?php 
                            $canonical_url = ArchiUrl::GetCanonicalUrl($brd->record_id, $brd->url_cpu, $brd->content_flow_id, $brd->country_id);
                        ?>
                       <a href="<?=$canonical_url?>">
                           <img src="<?php echo "$img_path$brd->record_image"; ?>" alt="pic" lazyloaded>
                       </a>
                    </div>
                    <header class="article__item_title">
                        <h3><a href="<?=$canonical_url?>"><?=$brd->record_title ?></a></h3>
                    </header>
                    <div class="article__item_intro"><?=$brd->announcement?></div>
                    <div class="article__info">
                        <?php if($brd->record_studio):?>
                        <ul class="article-list__item_info">
                            <li><?=$brd->record_studio?></li>
                        </ul>
                        <?php endif; ?>
                        <ul class="article__item_info_list">
                            <li> 
                                <date><?= ArchiDate::monthStrConvert($brd->record_date); ?></date>
                            <?php if($brd->record_author):?>
                                <span class="bg-author"><?=$brd->record_author?></span>
                            </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </article>
                
            <?php endforeach; ?>


    </div>
</section>


<?php /* ?>

<section class="article-list" id="section_<?=$block_id?>">
    <div class="separate"></div>
    <h2><?=$block_title?></h2>
<?php 
$script = <<< JS
let allowed_rows = $block_scroll_2_rows;    
JS;
$this->registerJs($script, yii\web\View::POS_HEAD);
?>        
    
    
    <div class="article-list__container">
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
            <article class="article-list__item<?=$add_class?>">
                <div class="article-list__photo">
                    <?php 
                        $canonical_url = ArchiUrl::GetCanonicalUrl($brd->record_id, $brd->url_cpu, $brd->content_flow_id, $brd->country_id);
                    ?>
                   <a href="<?=$canonical_url?>">
                       <img src="<?php echo "$img_path$brd->record_image"; ?>" alt="pic" lazyloaded>
                   </a>
                </div>
                <header class="article-list__item_title">
                    <h3><a href="<?=$canonical_url?>"><?=$brd->record_title ?></a></h3>
                </header>
                <div class="article-list__item_intro"><?=$brd->announcement?></div>
                <div class="article__info">
                    <?php if($brd->record_studio):?>
                    <ul class="article-list__item_info">
                        <li><?=$brd->record_studio?></li>
                    </ul>
                    <?php endif; ?>
                    <ul class="article-list__item_info_list">
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
<?php */ ?>