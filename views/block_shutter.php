<style>
.shutter_<?=$block_id?> {
    width: 100%;
    overflow: hidden;
    background-size: cover!important;
}

.shutter_<?=$block_id?> .window {
    width: 100%;
    height: <?=$block_img_bg_d_height?>vh;
    background: transparent;
    position: relative;
}

.shutter_<?=$block_id?> .window div{
    font-family: 'Vida Pro 32';
    font-size: 25px;
    float: right;
    position: absolute;
    bottom: 0;
    right: 0;
    color: #<?=$block_img_bg_text_color?>;
}

@media (min-width: 640px){
   .shutter_<?=$block_id?> {
      background: url(//i.archi.ru/i/<?=$block_img_bg_desktop ?>) no-repeat center center fixed;
   }
}
@media (min-width: 320px) and (max-width: 640px) {
   .shutter_<?=$block_id?> {
      background: url(//i.archi.ru/i/<?=$block_img_bg_mobile ?>) no-repeat center center fixed;
   }
}
</style>
<section class="shutter_<?=$block_id?>" id="section_<?=$block_id?>">
    <div class="window"><?php if(trim($block_img_bg_text)!=''):?><div><?=$block_img_bg_text?></div><?php endif;?></div>
</section>