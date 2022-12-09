<section class="partners" id="section_<?=$block_id?>">
    <h4><?=$block_title?></h4>
    <ul class="partners__list">
        <?php foreach($block_data as $pd): ?>
            <li class="partners__item">
                <a href="<?=$pd->record_link?>"><img src="//i.archi.ru/i/<?=$pd->record_image?>" alt="<?=$pd->record_title?>" title="<?=$pd->record_title?>" lazyloaded></a>
            </li>
        <?php endforeach;?>
    </ul>
</section>