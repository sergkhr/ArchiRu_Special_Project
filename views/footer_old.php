<style type="text/css">
	/*Footer*/
	.footer {
	background-color: #A8A8A8;
	height: 250px;
	text-align: center;
	color: #FFFFFF;
	display: flex;
	justify-content: center;
	flex-direction: row;
	padding-bottom: 38px;
	margin-top: 150px;
	}
	.footer a {
	text-decoration: none;
	}
	.footer__content_wrap {
	width: 90vw;
	position: relative;
	}
	.footer__nav {
	display: flex;
	justify-content: center;
	}
	.footer__nav_space {
	width: 100%;
	height: fit-content;
	display: flex;
	justify-content: center;
	}
	.footer__nav_container {
	max-width: 1100px;
	width: 100%;
	display: flex;
	justify-content: space-between;
	list-style-type: none;
	padding-inline-start: initial;
	margin: 35px 0 0 0;
	}
	.footer__nav_item {
	font-family: 'Vida Pro 32';
	font-weight: 400;
	font-size: 24px;
	line-height: 28px;
	list-style-type: none;
	text-transform: uppercase;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
	position: relative;
	}
	.footer__nav_item a {
	text-decoration: none;
	color: #FFFFFF;
	}
	.footer__nav_button {
	position: relative;
	}
	.footer__nav_button i {
	font-size: 20px;
	position: absolute;
	top: 0;
	transition: opacity 0.3s;
	opacity: 0;
	margin: 0;
	}
	.footer__nav_button .opened {
	opacity: 1;
	}
	.footer__socials {
	margin-top: 62px;
	}
	.footer__socials_container {
	list-style-type: none;
	display: flex;
	justify-content: center;
	padding-left: 0;
	margin: 0;
	}
	.footer__socials_container li {
	margin-right: 2.5vw;
	margin-top: 0px;
	margin-left: 2.5vw;
	}
	.footer__socials_container a {
	color: #FFFFFF;
	font-size: 20px;
	}
	.counters {
	list-style-type: none;
	padding-inline-start: initial;
	margin: 0 0 29px 0;
	}
	.counters li {
	text-align: start;
	height: 30px;
	}
	.footer__counters img {
	display: inline;
	height: 30px;
	}
	.footer__count_rights__wrap {
	position: absolute;
	left: 0;
	top: 125px;
	}
	.footer__rights {
	margin-bottom: 38px;
	font-family: 'Vida 32 Pro';
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 16px;
	display: flex;
	align-items: center;
	text-align: start;
	}
	.footer_mobile {
	display: none;
	}
	@media (min-width: 960px) and (max-width: 1240px) {
	.footer__socials {
		margin-top: 67px;
	}
	.footer__nav_item {
		font-size: 20px;
		line-height: 23px;
	}
	}
	@media (min-width: 640px) and (max-width: 960px) {
	.footer {
		height: fit-content;
	}
	.footer__content_wrap {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.footer__nav_container {
		flex-direction: column;
		justify-content: initial;
	}
	.footer__nav_item {
		font-size: 20px;
		line-height: 23px;
		margin-top: 25px;
		justify-content: normal;
	}
	.footer__socials {
		margin-top: 60px;
	}
	.footer__socials_container {
		flex-direction: column;
		justify-content: space-between;
		height: 100%;
		margin: 0;
	}
	.footer__socials_container a {
		font-size: 28px;
	}
	.footer__socials_container li {
		margin-right: 0;
		margin-top: 0px;
		margin-left: 0;
	}
	.footer__count_rights__wrap {
		position: relative;
		top: 0;
		width: 100%;
		margin-top: 60px;
	}
	.footer__count_rights__wrap .footer__rights {
		margin-bottom: 0;
	}
	}
	@media (min-width: 320px) and (max-width: 640px) {
	.footer {
		height: fit-content;
		padding-bottom: 38px;
	}
	.footer_mobile {
		display: block;
	}
	.footer__content_wrap {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.footer__nav {
		width: 100%;
		overflow: hidden;
		transition: height 0.3s;
	}
	.footer__nav_space {
		display: initial;
	}
	.footer__nav_button {
		display: flex;
		justify-content: center;
		width: 100%;
		height: 20px;
		margin-top: 35px;
	}
	.footer__nav_container {
		justify-content: center;
		flex-wrap: wrap;
		margin-top: 35px;
	}
	.footer__nav_item {
		margin: 0 10px 25px 10px;
		font-size: 16px;
		line-height: 20px;
	}
	.footer__socials {
		margin-top: -3px;
		width: 100%;
	}
	.footer__socials_container {
		justify-content: center;
	}
	.footer__count_rights__wrap {
		position: relative;
		top: 0;
		width: 100%;
		margin-top: 25px;
	}
	.footer__count_rights__wrap .footer__rights {
		margin-bottom: 0;
		margin-top: 0;
		text-align: center;
		justify-content: center;
	}
	.footer__counters {
		display: flex;
		justify-content: center;
	}
	.footer__rights {
		margin-top: 16px;
		font-size: 12px;
		line-height: 13px;
	}
	}
	.fa-times {
	float: right;
	margin: -15px 5px;
	}

</style>

<!--<?//php if(isset($bg_image_desktop)):?> style="background: url(<?//=$bg_image_desktop?>) 0 0 / cover;"<?//php endif;?>-->
<footer class="footer">
	<div class="footer__content_wrap">
		<!-- <div class="footer__nav_button footer_mobile">
			<i class="fas fa-bars opened" id="footer__nav_opener" aria-hidden="true"></i>
			<i class="fas fa-times" id="footer__nav_closer" aria-hidden="true"></i>
		</div> -->
		<div class="footer__nav">
			<div class="footer__nav_space">
				<ul class="footer__nav_container">
					<?//php foreach ($menu as $menu_item){ ?>
					<!--<li class="footer__nav_item"><a href="#section_<?//=$menu_item->block_id?>"><?//=$menu_item->block_title ?></a></li>-->
					<?//php } ?>
					<li class="footer__nav_item"><a>редакция</a></li>
					<li class="footer__nav_item"><a>контакты</a></li>
					<li class="footer__nav_item"><a>правила использования</a></li>
					<li class="footer__nav_item"><a>правовая информация</a></li>
				</ul>
				<!-- <div class="footer__rights footer_mobile">
					<div class="clearfix ind">
						© ООО «Архи.ру». Все права защищены.<br>
						архи.ру<sup>®</sup>, archi.ru<sup>®</sup> зарегистрированные торговые марки
					</div>
				</div> -->
			</div>
		</div>
		<div class="footer__socials">
			<ul class="footer__socials_container">
				<li><a class="tg" href="/" target="_blank" title="Telegram"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
				<li><a class="vk" href="https://vk.com/archiru" target="_blank" title="Вконтакте"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
				<li><a class="twit" href="https://twitter.com/archiru_portal" target="_blank" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>

		<div class="footer__count_rights__wrap">
			<div class="footer__counters">
				<ul class="counters">
					<li>
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

					</li>
				</ul>
				<!-- end .counters-->
			</div>
			<div class="footer__rights">
				<div class="clearfix ind">
					© ООО «Архи.ру». Все права защищены.<br>
					архи.ру<sup>®</sup>, archi.ru<sup>®</sup> зарегистрированные торговые марки
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript">
		$(".footer__nav_button").first().click(function(){
			let opener = $("#footer__nav_opener");
			opener.toggleClass("opened");
			$("#footer__nav_closer").toggleClass("opened");
			if(opener.hasClass("opened")){
				$(".footer__nav").first().css({"height":""});
			}
			else{
				$(".footer__nav").first().css({"height":$(".footer__nav_space").first().outerHeight() + "px"});
			}
		});
	</script> -->
	
<?php /* ?>
	<div class="container">
		<div class="start-date">с 20 июля 1999 г.</div>
		<!-- end .start-->
		<div class="clearfix ind">
			<strong>© ООО «Архи.ру»</strong>. Все права защищены.<br>
			архи.ру<sup>®</sup>, archi.ru<sup>®</sup> зарегистрированные торговые марки
		</div>

		<script type="text/javascript" src="https://archi.ru/orphus/orphus.js"></script>
		<a href="//orphus.ru" id="orphus" target="_blank" title="Система Orphus"><img alt="Система Orphus" src="https://archi.ru/orphus/orphus.gif" border="0" width="88" height="1" style="height:5px"></a>
		<div class="orphus"><img src="https://archi.ru/img/orphus.png"> Нашли опечатку <b>Orphus: Ctrl+Enter</b></div>

		<!-- end .ind-->
		<?php 
		if(isset($this->params['record_thematic_status'])){
			$menu_b_class = ' class="out-link-handler"';
		}
		else{
			$menu_b_class = '';
		}
		?>
		<nav class="bmenu">
			<section><strong>О проекте:</strong>
				<ul>
					<li><a href="/toggle_view"><b><u>Мобильная версия</u></b></a></li>
					<li><a href="https://archi.ru/files/about/we.htm">Редакция</a></li>
					<li><a href="https://archi.ru/contacts">Контакты</a></li>
					<li><a href="https://archi.ru/russia/copyright.html">Правила использования</a></li>
					<li><a href="https://archi.ru/files/about/legal_info.html">Правовая информация</a></li>
				</ul>
			</section>
			<!-- end section-->
			<section><strong>Проекты:</strong>
				<ul>
					<li><a href="https://archi.ru/agency/projects_next.html">Archinext</a></li>
					<li><a href="https://archi.ru/photo/index.htm">Фотогалерея</a></li>
					<li><a href="https://archi.ru/files/publications/index.htm">Научные публикации</a></li>
				</ul>
			</section>
			<!-- end section-->
		</nav>
		<!-- end .bmenu-->

		<div class="r2">
			<div class="clearfix">
				<ul class="socials2">
					<li><a class="vk" href="https://vk.com/archiru" target="_blank" title="Вконтакте" rel="nofollow">Вконтакте</a></li>
					<li><a class="twit" href="https://twitter.com/archiru_portal" target="_blank" title="Twitter" rel="nofollow">Twitter</a></li>
					<li><a class="rss" href="https://archi.ru/rss.xml" target="_blank" title="RSS" rel="nofollow">RSS</a></li>
					<li><a class="tel" href="https://t.me/archi_ru" target="_blank" title="Telegram" rel="nofollow">Telegram</a></li>
				</ul>
				<!-- end .socials2-->
			<?php if (YII_ENV=='prod'):?>
			<?php if(!isset($this->context->accessTest) || $this->context->accessTest=='0'):?>
				<ul class="counters">
					<li>
						<!--LiveInternet counter--><script type="text/javascript"><!--
							document.write("<a href='https://www.liveinternet.ru/click' "+
								"target=_blank><img src='https://counter.yadro.ru/hit?t14.2;r"+
								escape(document.referrer)+((typeof(screen)=="undefined")?"":
									";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
									screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
								";"+Math.random()+
								"' alt='' title='LiveInternet: показано число просмотров за 24"+
								" часа, посетителей за 24 часа и за сегодня' "+
								"border='0' width='88' height='31'><\/a>")
							//--></script><!--/LiveInternet-->


						<!-- Rating@Mail.ru counter -->
						<script type="text/javascript">
							var _tmr = window._tmr || (window._tmr = []);
							_tmr.push({id: "19773", type: "pageView", start: (new Date()).getTime()});
							(function (d, w, id) {
								if (d.getElementById(id)) return;
								var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
								ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
								var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
								if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
							})(document, window, "topmailru-code");
						</script><noscript><div>
								<img src="//top-fwz1.mail.ru/counter?id=19773;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
							</div></noscript>
						<!-- //Rating@Mail.ru counter -->
						<!-- Rating@Mail.ru logo -->
						<a href="https://top.mail.ru/jump?from=19773">
							<img src="//top-fwz1.mail.ru/counter?id=19773;t=280;l=1"
								 style="border:0;" height="31" width="38" alt="Рейтинг@Mail.ru" /></a>
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
									screen.colorDepth:screen.pixelDepth)</script>
						<script type="text/javascript" language="javascript1.3">hotlog_js="1.3"</script>
						<script type="text/javascript" language="javascript">hotlog_r+="&js="+hotlog_js;
							document.write("<a href='https://click.hotlog.ru/?25765' target='_top'><img "+
								" src='https://hit2.hotlog.ru/cgi-bin/hotlog/count?"+
								hotlog_r+"&' border=0 width=88 height=31 alt=HotLog><\/a>")
						</script>
						<noscript>
							href="/" onmousemove="hl('agency_all_workshops', 'https://agency.archi.ru/workshops.html');return false" id="agency_all_workshops"
							<a href="/" onmousemove="hl('hotlog_25765', 'https://click.hotlog.ru/?25765');return false" id="agency_all_workshops"
							   id="hotlog_25765" target="_top">
								<img src="https://hit2.hotlog.ru/cgi-bin/hotlog/count?s=25765&amp;im=134" border="0"
									 width="88" height="31" alt="HotLog"></a>
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

						<?php 
							$ref = Yii::$app->request->referrer;
							preg_match('/articles_month/si', $ref, $matches);
							if(count($matches)!==0){
								echo "<script>ga('send', 'event', 'ref_page', 'open_page', '" . $this->params['canonical_url'] . "');</script>";
							}
						?>
						
					</li>
				</ul>
				<!-- end .counters-->
				<?php endif;?>
				<?php endif;?>
			</div>

		</div>
		<!-- end .r2-->
	</div>
	<!-- end .container-->
	<div class="shad-t"></div>
<?php */ ?>
</footer>
 
<!-- end .footer-->