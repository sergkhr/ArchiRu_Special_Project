<!--<?//php if(isset($bg_image_desktop)):?> style="background: url(<?//=$bg_image_desktop?>) 0 0 / cover;"<?//php endif;?>-->
<footer class="footer">
	<div class="footer__content_wrap">
		<div class="footer__nav">
			<div class="footer__nav_space">
				<ul class="footer__nav_container">
                                    <?php /* ?>
					<?php foreach ($menu as $menu_item){ ?>
					<li class="footer__nav_item"><a href="#section_<?=$menu_item->block_id?>"><?=$menu_item->block_title ?></a></li>
					<?php } ?>
                                    <?php */ ?>    
					<li class="footer__nav_item"><a href="https://archi.ru/files/about/we.htm">редакция</a></li>
					<li class="footer__nav_item"><a href="https://archi.ru/contacts">контакты</a></li>
					<li class="footer__nav_item"><a href="https://archi.ru/russia/copyright.html">правила использования</a></li>
					<li class="footer__nav_item"><a href="https://archi.ru/files/about/legal_info.html">правовая информация</a></li>
				</ul>
			</div>
		</div>
		<div class="footer__socials">
			<ul class="footer__socials_container">
				<li><a class="tg" href="https://t.me/archi_ru" target="_blank" title="Telegram"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
				<li><a class="vk" href="https://vk.com/archiru" target="_blank" title="Вконтакте"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
				<?php /* ?><li><a class="twit" href="https://twitter.com/archiru_portal" target="_blank" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li><?php */ ?>
			</ul>
		</div>

		<div class="footer__count_rights__wrap">
			<div class="footer__counters">
				<ul class="counters">
					<li>
                                            <?php if(isset($accessTest) && $accessTest!=1): ?>
						<!--LiveInternet counter-->
						<script type="text/javascript">
							document.write("<a href='https://www.liveinternet.ru/click' "+
								"target=_blank><img src='https://counter.yadro.ru/hit?t14.2;r"+
								escape(document.referrer)+((typeof(screen)=="undefined")?"":
								";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
							screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
							";"+Math.random()+
							"' alt='' title='LiveInternet: показано число просмотров за 24"+
							" часа, посетителей за 24 часа и за сегодня' "+
							"border='0' width='88' height='31'><\/a>")
						</script>
						<!--/LiveInternet-->

						<!-- Rating@Mail.ru counter -->
						<script type="text/javascript">
							var _tmr = window._tmr || (window._tmr = []);
							_tmr.push({id: "19773", type: "pageView", start: (new Date()).getTime()});
							(function (d, w, id) {
								if (d.getElementById(id)) return;
								var ts = d.createElement("script");
								ts.type = "text/javascript";
								ts.async = true;
								s.id = id;
								ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
								var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
								if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
							})(document, window, "topmailru-code");
						</script>
						<noscript>
							<div>
								<img src="//top-fwz1.mail.ru/counter?id=19773;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
							</div>
						</noscript>
						<!-- //Rating@Mail.ru counter -->

						<!-- Rating@Mail.ru logo -->
							<a href="https://top.mail.ru/jump?from=19773">
								<img src="//top-fwz1.mail.ru/counter?id=19773;t=280;l=1" style="border:0;" height="31" width="38" alt="Рейтинг@Mail.ru" />
							</a>
						<!-- //Rating@Mail.ru logo -->

						<!-- HotLog -->
						<script type="text/javascript" language="javascript">
							hotlog_js="1.0";
							hotlog_r=""+Math.random()+"&s=25765&im=134&r="+escape(document.referrer)+"&pg="+
							escape(window.location.href);
							document.cookie="hotlog=1; path=/"; hotlog_r+="&c="+(document.cookie?"Y":"N");
						</script>
						<script type="text/javascript" language="javascript1.1">
							hotlog_js="1.1";hotlog_r+="&j="+(navigator.javaEnabled()?"Y":"N")
						</script>
						<script type="text/javascript" language="javascript1.2">
							hotlog_js="1.2";
							hotlog_r+="&wh="+screen.width+'x'+screen.height+"&px="+
							(((navigator.appName.substring(0,3)=="Mic"))?
							screen.colorDepth:screen.pixelDepth)
						</script>
						<script type="text/javascript" language="javascript1.3">hotlog_js="1.3"</script>
						<script type="text/javascript" language="javascript">hotlog_r+="&js="+hotlog_js;
							document.write("<a href='https://click.hotlog.ru/?25765' target='_top'><img "+
							" src='https://hit2.hotlog.ru/cgi-bin/hotlog/count?"+
							hotlog_r+"&' border=0 width=88 height=31 alt=HotLog><\/a>")
						</script>
						<noscript>
							href="/" onmousemove="hl('agency_all_workshops', 'https://agency.archi.ru/workshops.html');return false" id="agency_all_workshops" 
							<a href="/" onmousemove="hl('hotlog_25765', 'https://click.hotlog.ru/?25765');return false" id="agency_all_workshops" id="hotlog_25765" target="_top">
								<img src="https://hit2.hotlog.ru/cgi-bin/hotlog/count?s=25765&amp;im=134" border="0" width="88" height="31" alt="HotLog">
							</a>
						</noscript>
						<!-- /HotLog -->

						<!-- Google Analytics -->
						<script>
						(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

						ga('create', 'UA-7173716-1', 'auto');
						ga('send', 'pageview');
						</script>
						<!-- Google Analytics -->
                                            <?php endif; ?>
					</li>
				</ul>
				<!-- end .counters-->
			</div>
			<div class="footer__rights">
				<div class="clearfix ind">
					© ООО «Архи.ру». Все права защищены.<br>
					архи.ру<sup>®</sup>, archi.ru<sup>®</sup> зарегистрированные торговые марки
					<br><br> Дизайн - Тарабарина Ю., Лызлов Н.
					<br> Серверная часть - Клет Л.,	Мочалов М.
					<br> Клиентская часть - Хречко С. ИКБО-03-21
				</div>
			</div>
		</div>
	</div>

</footer>
 
<!-- end .footer-->