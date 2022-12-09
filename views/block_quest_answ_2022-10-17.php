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

<!-- Новая версия -->
<section class="faq"><div id="faq_m"></div> <div class="faq_ancor"></div>
         
         <h2>Вопросы и ответы</h2>
         <div class="faq__container">
            <div class="faq__item-list">
                <div class="faq__item">
                    <div class="faq__item_header" tabindex="1" >   
                            <div class="question__title">Вопрос</div>
                            <div class="question__inner">1. Можно ли из архитектурного бетона выполнять несущие элементы зданий?</div>
                            <div class="faq__item_button">+</div>
                            <div class="faq__item_header-block">
                                <div class="question__inner_autor">Елена Адекова </div>
                                <div class="question__inner_autor-info">Архитектурное бюро при институте АРХиД ТИУ</div>
                                <div class="question__inner_autor-info_function">архитектор </div>
                            </div>
                    </div>
                    <div class="faq__item_content">
                      
                        
                      
                        <div class="answer__inner">
                            <div class="answer__title">Ответ</div>
                            <p class="answer__inner_text"> Выполнять несущие элементы зданий из архитектурного бетона можно.
                             В этом случае конструкция становится особенно “честной”, поскольку материал,
                              показанный снаружи, будет в точности соответствовать структуре несущей конструкции.
                               Однако важно рассчитывать [текст ответа тестовый]
                            </p>
                            <p class="answer__inner_text"> Выполнять несущие элементы зданий из архитектурного бетона можно.
                                В этом случае конструкция становится особенно “честной”, поскольку материал,
                                 показанный снаружи, будет в точности соответствовать структуре несущей конструкции.
                                  Однако важно рассчитывать [текст ответа тестовый]
                            </p>
                            <div class="respondent">
                                <div class="respondent__wrap">
                                    
                                        <img class="respondent_photo" src="./img/11.jpg" alt="pic">
                                    
                                    <div class="question__inner_autor">Елена Адекова </div>
                                    <div class="question__inner_autor-info">Архитектурное бюро при институте АРХиД ТИУ</div>
                                    <div class="question__inner_autor-info_function">архитектор </div>
                                </div>

                            </div>
                        </div>
                        <div class="faq__item_button">+</div>   
                    </div>
                    
                </div>
            </div>
                  
            </div>
            <div class="faq__details">
                <div class="faq__details__button"><img src="./img/faq_ar.png" alt="Показать еще"></div>
                <div class="faq__details__link_wrap"><div class="faq__details__link"><a href="/">еще ответы</a></div></div>
            </div>
         
     </section>