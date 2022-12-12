<header class="header">
        <div class="header__container">
            <div class="header__logo"><a href="https://archi.ru/"><img src="https://archi.ru/files/index_page/img/logo.png" alt="logo"></a></div>
            <nav class="header__menu">
                <ul class="header__menu_list">
                    <li class="header__menu_item"><a href="https://archi.ru/russia" class="header__menu__link">РОССИЯ</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/world" class="header__menu__link">МИР</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/tech" class="header__menu__link">Технологии</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/press" class="header__menu__link">Пресса</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/architects" class="header__menu__link">Архитекторы</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/projects" class="header__menu__link">Проекты</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/contests" class="header__menu__link">Конкурсы</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/events" class="header__menu__link">События</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/lib/index_html?fl=5&sl=5" class="header__menu__link">Книги</a></li>
                    <li class="header__menu_item"><a href="https://archi.ru/vacancy/list.html" class="header__menu__link">Вакансии</a></li>
                </ul>
            </nav>
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                  <span></span>
                </label>
                
                <div class="header__menu_box">
                <div class="header__box_line"></div>
                <div class="header__box_line-mobile line__up"></div>
                    <div class="header__box_menu">
                        <ul class="header__menu_list">
                            <li class="header__menu_item"><a href="https://archi.ru/russia" class="header__menu__link">РОССИЯ</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/world" class="header__menu__link">МИР</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/tech" class="header__menu__link">Технологии</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/press" class="header__menu__link">Пресса</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/architects" class="header__menu__link">Архитекторы</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/projects" class="header__menu__link">Проекты</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/contests" class="header__menu__link">Конкурсы</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/events" class="header__menu__link">События</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/lib/index_html?fl=5&sl=5" class="header__menu__link">Книги</a></li>
                            <li class="header__menu_item"><a href="https://archi.ru/vacancy/list.html" class="header__menu__link">Вакансии</a></li>
                        </ul>
                    </div>
                    <div class="header__box_line"></div>
                    
                    
                       
                        <div class="header__inner_search">
                        <form>
                            <input type="text" placeholder="Искать здесь...">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        </div>
                    <div class="header__box_container">
                        <ul class="info__menu">
                            <li><a href="https://archi.ru/contacts">Контакты редакции</a></li>
                            <li><a href="https://archi.ru/en">English version</a></li>
                            <li><a href="https://archi.ru/user/user_new.html">Рассылка новостей</a></li>
                        </ul>
                        <ul class="header__socials_container">
                            <li><a class="tg" href="https://t.me/archi_ru" target="_blank" title="Telegram"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
                            <li><a class="vk" href="https://vk.com/archiru" target="_blank" title="Вконтакте"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
                            <?php /* ?><li><a class="twit" href="https://twitter.com/archiru_portal" target="_blank" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li><?php */ ?>
                        </ul>
                     </div>
                     <div class="header__box_achor-menu">
                        <div class="header__box_line-mobile"></div>
                        <div class="header__box_achor-menu--title"><?=news_title_short?></div>
                            <ul class="header__menu_inner">
                                    <?php $i=0; foreach ($project_info_menu as $menu_item){ ?>
                                        <li><a class="menu__item" href="#section_<?=$menu_item->block_id?>"><?=$menu_item->block_title ?></a></li>
                                    <?php $i++; } ?>
                            </ul>
                        </div>
                    
                    </div>   
              </div>
              <form class="header__search">
                <input placeholder="поиск" type="search">
              </form>
            
        </div>
    </header>