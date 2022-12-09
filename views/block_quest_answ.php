<?php /*?>
<section class="faq" id="section_<?=$block_id?>">
    <h2><?=$block_title?></h2>
    <div class="faq__container">
        <div class="faq__item-list">
        <?php foreach($block_data as $qa): ?>
            <div class="faq__item">
                <div class="question__title">Вопрос</div>
                <div class="question__inner"><?=$qa->question ?></div>
                <div class="question__inner_autor"><?=$qa->question_author ?></div>
                <div class="answer__title">Ответ</div>
                <div class="answer__inner"><?=$qa->answer ?><...><a href="#">Далее</a></div>
                <?php if($qa->answer_author) :?>
                   <div class="question__inner_autor-info"><?=$qa->answer_author ?></div>
                <?php endif; ?>
            </div>
        <?php endforeach;?>
        </div>
    </div>
    <div class="details">
        <div class="details__button"><img src="<?=$decor_img_path?>img/details.png" alt="Показать еще"></div>
       <div class="details__link_wrap"><div class="details__link"><a href="/">еще вопросы</a></div></div>   
    </div>
</section>
<?php */ ?>
<!-- Новая версия -->
<section class="faq" id="section_<?=$block_id?>"><div id="faq_m"></div><div class="faq_ancor"></div>
    <h2><?=$block_title?></h2>
    <div class="faq__container">
        <div class="faq__item-list">
            <?php foreach($block_data as $qa): ?>
                <div class="faq__item">
                    <div class="faq__item_header" tabindex="1">   
                        <div class="question__title">Вопрос</div>
                        <div class="question__inner"><?=$qa->question ?></div>
                        <div class="faq__item_button">+</div>
                        <div class="faq__item_header-block">
                            <?php if($qa->question_author):?><div class="question__inner_autor"><?=$qa->question_author ?></div><?php endif; ?>
                        </div>                        
                    </div>
                    <div class="faq__item_content">
                        <div class="answer__inner">
                            <div class="answer__title">Ответ</div>
                            <?php if($mobile_detect!=1):?>
                            <?php 
                                    $qa_data_words_count = count(preg_split('/\s+/', $qa->answer));
                                    $fa_answer = explode(" ", $qa->answer);
                                    $fa_answer_1 = array_slice($fa_answer, 0, ceil($qa_data_words_count/2));
                                    $fa_answer_2 = array_slice($fa_answer, ceil($qa_data_words_count/2));
                                ?>
                            <p class="answer__inner_text"><?=implode(" ", $fa_answer_1) ?></p>
                            <p class="answer__inner_text"><?=implode(" ", $fa_answer_2) ?></p>
                            <?php else:?>
                            <p class="answer__inner_text"><?=$qa->answer ?></p>
                            <?php endif;?>
                            <div class="respondent">
                                <div class="respondent__wrap">
                                    <?php if($qa->person_image) :?><img class="respondent_photo" src="<?=$person_img_path?><?=$qa->person_image?>" alt="pic"><?php endif;?>
                                    <?php if($qa->answer_author) :?><div class="question__inner_autor"><?=$qa->answer_author ?></div><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="faq__item_button">+</div>                        
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="faq__details">
        <div class="faq__details__button"><img src="<?=$decor_img_path?>img/faq_ar.png" alt="Показать еще"></div>
        <div class="faq__details__link_wrap"><div class="details__link"><a href="/">еще вопросы</a></div></div>
    </div>
</section>