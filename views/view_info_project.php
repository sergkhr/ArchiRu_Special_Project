<?php
$this->registerJsFile('https://archi.ru/files/misc/css_js/google/google_tag_manager.js', ['position'=>$this::POS_HEAD]);

use \app\components\ArchiDate;
use \app\components\ArchiUrl;
use \app\components\ArchiMisc;
use \app\components\LinksParse;
use \app\components\CssUpdate;
use yii\helpers\Html;
use yii\helpers\Url;

$this->params['pathInfo'] = $pathInfo;
$this->title = $project_info->news_title;
$this->params['canonical_url'] = $canonical_url;
$news_text = $project_info->news_text;
//$news_text = ArchiMisc::filterContent($news_text); // filtering Facebook's and Instagram's entrances

if(trim($project_info->announcement)==''){
    $n_announcement_pre = explode(". ", $news_text);
    $n_announcement = "";
    foreach($n_announcement_pre as $k=>$v){
        if($k < 2){
           $n_announcement .= ". " . $v;
        }
        else{
           $n_announcement = substr($n_announcement, 2);
           break;
        }
    }
}
else{
    $n_announcement = $project_info->announcement;
}
$n_announcement = html_entity_decode($n_announcement);
$n_announcement = ArchiMisc::tagsRemove($n_announcement);
$this->params['announcement'] = $n_announcement;
$print_version_url = 'https://archi.ru/print/news/';

if($project_info->img_bg_desktop){
    $bg_image_desktop = "//i.archi.ru/i/$project_info->img_bg_desktop";
    //$this->params['bg_image_desktop'] = $bg_image_desktop;
}
if($project_info->img_bg_mobile){$bg_image_mobile = "//i.archi.ru/i/$project_info->img_bg_mobile";}
?>

<?php
$this->registerCss('@media (min-width: 640px){
   .hero__img {
      background: url(' . $bg_image_desktop . ') 0 0 / cover;
   }
}
@media (min-width: 320px) and (max-width: 640px) {
   .hero__img {
      background: url(' . $bg_image_mobile . ') 0 0 / cover;
   }
}');
?>
<main>
    <?= $this->render("info_project/header"); ?>    
    <section class="hero">
        <div class="hero__container">
            <img class="hero__img">
            <div class="hero__tags"><?= $project_info->news_title_short; ?></div>
            <div class="hero__content">
                <h1><?= $this->title; ?></h1>
                <div class="hero__intro"><?= $project_info->announcement; ?></div>
            </div>
              <nav class="menu">
                <ul class="menu__list">
                <?php $i=0; foreach ($project_info->project_info_menu as $menu_item){ ?>
                 <li class="menu__item"><a class="menu__link" href="#section_<?=$menu_item->block_id?>"><?=$menu_item->block_title ?></a></li>
                <?php $i++; } ?>
                </ul>
              </nav>
<!--
              <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                  <span></span>
                </label>
                <ul class="menu__box">
                <?php foreach ($project_info->project_info_menu as $menu_item){ ?>
                 <li><a class="menu__item" href="#section_<?=$menu_item->block_id?>"><?=$menu_item->block_title ?></a></li>
                <?php } ?>
                </ul>
              </div>
-->
        </div>
    </section>

<?php foreach($project_info->project_info_blocks as $project_info_block): ?>
    
    <?php if($project_info_block->block_type=='3'): ?>
        <?php if(count($project_info_block->partners_data)!=0):?>
            <?= $this->render("info_project/block_partners", ['block_id' => $project_info_block->block_id, 'block_title' => $project_info_block->block_title, 
                                                 'block_data' => $project_info_block->partners_data]); ?>
        <?php endif; ?>

    <?php elseif($project_info_block->block_type=='1'): ?>
        <?php if(count($project_info_block->block_records_data)!=0):?>
            <?php if($project_info_block->design==1):?>
                <?php if($project_info_block->block_scroll=='1'):?>
                    <?= $this->render("info_project/block_texts_1_2", ['block_id' => $project_info_block->block_id, 
                                        'block_title' => $project_info_block->block_title, 
                                        'rec_img_path' => $rec_img_path,
                                        'decor_img_path' => $decor_img_path,
                                        'block_scroll_2_rows' => $project_info_block->block_scroll_2_rows,
                                        'mobile_detect' => $mobile_detect,
                                        'block_data' => $project_info_block->block_records_data]); ?>
                <?php elseif($project_info_block->block_scroll=='2'):?>
                    <?= $this->render("info_project/block_texts_1", ['block_id' => $project_info_block->block_id, 
                                        'block_title' => $project_info_block->block_title, 
                                        'rec_img_path' => $rec_img_path,
                                        'decor_img_path' => $decor_img_path,
                                        'block_scroll_2_rows' => $project_info_block->block_scroll_2_rows,
                                        'mobile_detect' => $mobile_detect,
                                        'block_data' => $project_info_block->block_records_data]); ?>
                <?php endif; ?>
            <?php elseif($project_info_block->design==2): ?>
                <?php if($project_info_block->block_scroll=='1'):?>
                    <?= $this->render("info_project/block_texts_2", ['block_id' => $project_info_block->block_id, 
                                        'block_title' => $project_info_block->block_title, 
                                        'rec_img_path' => $rec_img_path,
                                        'decor_img_path' => $decor_img_path,
                                        'block_data' => $project_info_block->block_records_data]); ?>
                <?php elseif($project_info_block->block_scroll=='2'):?>
                    <?= $this->render("info_project/block_texts_2_2", ['block_id' => $project_info_block->block_id, 
                                        'block_title' => $project_info_block->block_title, 
                                        'rec_img_path' => $rec_img_path,
                                        'decor_img_path' => $decor_img_path,
                                        'block_scroll_2_rows' => $project_info_block->block_scroll_2_rows,
                                        'block_data' => $project_info_block->block_records_data]); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

    <?php elseif($project_info_block->block_type=='2'): ?>
        <?php if(count($project_info_block->qa_data)!=0):?>
            <?= $this->render("info_project/block_quest_answ", ['block_id' => $project_info_block->block_id, 
                              'block_title' => $project_info_block->block_title, 
                              'decor_img_path' => $decor_img_path,
                              'person_img_path' => $person_img_path,
                              'block_data' => $project_info_block->qa_data,
                              'mobile_detect' => $mobile_detect]); ?>
        <?php endif; ?>


    <?php elseif($project_info_block->block_type=='4'): ?>
        <?php if(count($project_info_block->glossary_data)!=0):?>
            <?php if($project_info_block->design==1):?>
                <?= $this->render("info_project/block_glossary_1", ['block_id' => $project_info_block->block_id, 
                                  'block_title' => $project_info_block->block_title, 
                                  'decor_img_path' => $decor_img_path,
                                  'block_data' => $project_info_block->glossary_data]); ?>
            <?php elseif($project_info_block->design==2):?>
                <?= $this->render("info_project/block_glossary_2", ['block_id' => $project_info_block->block_id, 
                              'block_title' => $project_info_block->block_title, 
                              'decor_img_path' => $decor_img_path,
                              'block_data' => $project_info_block->glossary_data]); ?>
            <?php endif; ?>
        <?php endif;?>

    <?php endif; ?>
<?php endforeach; ?>

<?= $this->render("info_project/footer", ['bg_image_desktop' => $bg_image_desktop, 'menu' => $project_info->project_info_menu, 'accessTest' => $this->context->accessTest]); ?>    

</main>