<?=$this->element('slider')?>
<div class="container">
	<div class="cr">
		<ul class="category-list">
			<h1 class="category-list__title">
				Пластическая хирургия 
			</h1>
			<li><a href="/services/uvelichenie_grudi" title="Увеличение груди">Увеличение груди</a></li>
			<li><a href="/services/mammoplastika" title="Уменьшение молочных желез">Маммопластика редукционная (Уменьшение молочных желез)</a></li>
			<li><a href="/services/podtjazhka_grudi" title="Подтяжка груди">Подтяжка груди</a></li>
			<li><a href="http://beiskenov.com/services/endoprotezirovanie" title="Эндопротезирование в сочетании с подтяжкой">Эндопротезирование в сочетании с подтяжкой </a></li>
			<li><a href="/services/abdominoplastika" title="Пластика живота">Абдоминопластика (Пластика живота)</a></li>
			<li><a href="/services/podtjazhka_zhivota" title="Подтяжка живота">Подтяжка живота</a></li>
			<li><a href="/services/uvelichenie_yagodits" title="Увеличение ягодиц, подтяжка">Увеличение ягодиц, подтяжка (Глютеопластика)</a></li>
			<li><a href="/services/plastika_goleni" title="Пластика голени">Пластика голени</a></li>
			<li><a href="/services/Intimnaya_plastika" title="Интимная пластика">Интимная пластика</a></li>
			<li><a href="/services/Endoskopicheskaya" title="Эндоскопическая подтяжка лица">Эндоскопическая подтяжка лица</a></li>
			<li><a href="/services/Otoplastika" title="Пластика ушей">Отопластика (Пластика ушей)</a></li>
			<li><a href="/services/Podtyazhka_litsa" title="Подтяжка лица">Подтяжка лица</a></li>
			<li><a href="/services/blefaroplastika" title="Пластика век">Блефаропластика (Пластика век)</a></li>
			<li><a href="/services/konturnaja_plastika" title="Контурная пластика">Контурная пластика (Носогубные складки)</a></li>
			<li><a href="/services/Plastika_shei" title="Пластика шеи">Пластика шеи</a></li>
			<li><a href="/services/rinoplastika" title="Ринопластика">Ринопластика (Пластика носа)</a></li>
		</ul>
		<ul class="news-list-index">
			<div class="news-list-index__title">
				новости
			</div>
			<?php foreach($blog as $item): ?>
			<li class="news-list-item">
				<div class="date">
					<?php echo $this->Time->format($item['Blog']['date'], '%d', 'invalid'); ?>
					<span>
						<?php echo $this->Time->format($item['Blog']['date'], '%m-%Y', 'invalid'); ?>
					</span>
				</div>
				<div class="news-list-item__text">
					<a href="" class="news-list-item__title">
						<?=$item['Blog']['title']?>
					</a>
					<p>Сезон скидок объявляется открытым! Только до 15 января в нашей клинике действуют праздничные цены на хирургию, а также бонусная система для клиентов...</p>
					<a href="" class="read-more">
						Узнать подробнее...
					</a>
				</div>	
			</li>
			<?php endforeach ?>
			<a href="/news" class="button">
				читать все новости
			</a>
		</ul>
	</div>
	<section class="sur_slider">
		<div class="z_slider">
			<div id="rt-showcase">
				<div id="main">
				  <div id="iphone">
					<div id="webpage"><img src="/img/123.jpg" width="1400" height="732">
					  <div id="retina">
						<div class="text"></div>
						<div class="blik"><img src="/img/blik.png" alt="Лупа" width="240" height="240"></div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
		<div class="mob_zs">
			<div class="z_row">
				<a href="/services/masterskaya_idealnoy_grudi">Мастерская идеальной груди</a>
			</div>
			<div class="z_row">
				<a href="/services/plastika_tela">Пластика тела</a>
			</div>
			<div class="z_row">
				<a href="/services/plastika_litsa">Пластика лица</a>
			</div>
		</div>
	</section>
	<div class="cr">
		<ul class="pre-list">
			<li>
				<div class="pre-item">
					<div class="pre-item__title result">
						<span>Великолепные результаты</span>
					</div>
					<p>Подробные консультации, внимание к особенностям каждого пациента и постоперационное сопровождение – забота о клиентах всегда гарантирует лучшие результаты. </p>
				</div>
			</li>
			<li>
				<div class="pre-item">
					<div class="pre-item__title garantia">
						<span>Гарантия качества</span>
					</div>
					<p>Сертифицированные аппараты последнего поколения позволяют выполнять полный спектр косметологических процедур.  </p>
				</div>
			</li>
			<li>
				<div class="pre-item">
					<div class="pre-item__title standart">
						<span>Европейские стандарты</span>
					</div>
					<p>Удачное расположение в тихой части города, собственный стационар и палата интенсивной терапии упрощают восстановление после операции. </p>
				</div>
			</li>
			<li>
				<div class="pre-item">
					<div class="pre-item__title metodic">
						<span>Уникальные методики</span>
					</div>
					<p>Последние тенденции в пластической хирургии и косметологии, одобренные врачами во всем мире, гарантируют отличные результаты.  </p>
				</div>
			</li>
			<li>
				<div class="pre-item">
					<div class="pre-item__title podxod">
						<span>Индивидуальный подход</span>
					</div>
					<p>Квалифицированные и опытные сотрудники постоянно совершенствуют свои навыки благодаря обучающим семинарам и международным конференциям. </p>
				</div>
			</li>
		</ul>
		<div class="face-container">
			<div class="face">
				<img src="/img/face.png" alt="Пластика лица">
				<a href="/services/Endoskopicheskaya" class="endoskopia">Эндоскопия</a>
				<a href="/services/Otoplastika" class="otoplastika">Отопластика</a>
				<a href="/services/Podtyazhka_litsa" class="podtiazhka_lica">Подтяжка лица</a>
				<a href="/services/blefaroplastika" class="plastica_vek">Пластика век</a>
				<a href="/services/rinoplastika" class="rinoplastika">Ринопластика</a>
				<a href="/services/konturnaja_plastika" class="lipofiling">Липофилинг</a>
				<a href="/services/Plastika_shei" class="plastika_shei">Пластика шеи</a>
			</div>
		</div>
		<div class="index-text">
			<div class="title">
				<h2>Пластическая хирургия в Астане</h2>
			</div>
			<p>В нынешнее время, выглядеть молодо и привлекательно очень важно. Современный мир требует идеальных людей. В достижении этой цели, многие люди прибегают к изнурительным тренировкам, диетам и другим методам дающие не скорый результат. Но есть быстрый способ, предоставляющий 100% результат - этот способ носит название пластическая хирургия. </p> 
			<p>
			Сейчас Казахстан является передовой и быстро развивающейся страной, которая идет в ногу со всем современным и прогрессивным миром в оказании услуг по пластической хирургии. В Астане всё чаще и чаще, можно увидеть как открывающиеся клиники, оказывающие услуги по хирургической косметологии, так и уже практикующие клиники, работающие немалое время. </p>  
			<p>Среди большего количества пластических клиник расположенных в Астане, стоит выделить особым вниманием одну, в которой практикует ведущий <a href="http://beiskenov.com/page/about">пластический хирург Бейскенов Ильяс Саматович</a>.Чьи результаты работ, удостоены первых страниц журналов, посвященных пластической хирургии.</p>
			<p>Среди оказываемых им услуг, можно отметить: </p>
			<p ><strong> Мастерская идеальной груди</strong></p>
			<ul>
				<li>•	Увеличение груди – эндопротезирование молочных желез</li>
				<li>•	Редукционная маммопластика</li>
				<li>•	Подтяжка груди</li>
				<li>•	Эндопротезирование в сочетании с подтяжкой</li>
			</ul>
			<p > <strong>Пластика тела</strong></p>
			<ul>
				<li>•	Абдоминопластика (Пластика живота)</li>
				<li>•	Увеличение ягодиц, подтяжка (Глютеопластика)</li>
				<li>•	Интимная пластика</li>
				<li>•	Подтяжка живота</li>
				<li>•	Пластика голени</li>
			</ul>
			<p ><strong>Пластика лица</strong></p>
			<ul>
				<li>•	Эндоскопическая подтяжка лица</li>
				<li>•	Подтяжка лица</li>
				<li>•	Контурная пластика (Носогубные складки)</li>
				<li>•	Ринопластика (Пластика носа)</li>
				<li>•	Отопластика</li>
				<li>•	Блефаропластика (Пластика век)</li>
				<li>•	Пластика шеи</li>
			</ul>
			<p>Результат пластической операции переведённой ведущим пластическим хирургом, будет еще очень долгое время радовать человека, обзаведшимся новой внешностью благодаря замечательному специалисту. Сейчас многие центры пластической хирургии, обладают огромным парком современного оборудования, а также весомым опытом, который ведущие хирурги применяют в сфере косметологии и корректировки внешнего вида. Благодаря опыту и высококачественному оборудованию, хирурги просто филигранно выполнять свою работу, без риска для здоровья и жизни своего пациента.</p>
			<p>Если Вы, всё еще раздумываете, о том, где лучше и более качественно провести корректировку своей внешности прибегая к услугам пластических клиник. То знайте, что у нас в Казахстане городе Астана, расположен <a href="http://beiskenov.com/contacts">Центр пластической хирургии </a>Бейскенова Ильяса Саматовича который предоставит Вам огромный выбор оказываемых услуг, с достижением 100%-го результата. Мастерство хирурга проверено годами и отзывами довольных клиентов.</p>
			<a href="/page/about" class="read-more">
				Прочитать больше...
			</a>
		</div>
	</div>
</div>