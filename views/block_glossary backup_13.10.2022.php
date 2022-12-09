<section class="glossary" id="section_<?=$block_id?>">
<div id="glo"></div>
	<H2><?=$block_title?></H2>
	<div class="glossary__container">
		<div class="glossary__top-arrow"><img src="<?=$decor_img_path?>img/top_arrow.png"></div>
			<div class="glossary__list_wrap">
				<ul class="glossary__list">
					<?php foreach($block_data as $glossary): ?>
						<li class="glossary__list_item"><span class="glossary_title"><?=$glossary->term?></span>
							<ul>
								<li class="glossary__content"><i class="fas fa-times g_close"></i><p><?=$glossary->term_descr?></p></li>
							</ul>
						</li>
					<?php endforeach; ?>
				</ul> 
			</div>
		<div class="glossary__bottom-arrow"><img src="<?=$decor_img_path?>img/down_arrow.png"></div>
	</div>
</section>