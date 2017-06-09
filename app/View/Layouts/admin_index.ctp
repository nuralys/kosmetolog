<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Административная панель. Beiskenov</title>
		<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css(array('normalize', 'style', 'admin', 'jquery-ui.css'));
		echo $this->Html->script(array('jquery-1.9.0.min', 'jquery-ui-1.11.4.custom/jquery-ui'));
		echo $this->Html->script('ckeditor/ckeditor.js');
		?>
		<meta name="viewport" content="width=1100">
	</head>
	<body>
		<div class="mtop"></div>
		<div class="main">
		<header>
			
			<div class="header">
				<div class="cr">
					<a href="/">
			<img alt="" title="" src="/img/klinika_plasticheskoj_hirurgii_bejskenov.jpg"/>
					</a>
					<h4>Административная панель cайта</h4>
				</div>
			</div>
		</header>
		<section>
			<div class="cr ov">
				<div class="content">
					<div class="about_txt">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->Session->flash('good'); ?>
					<?php echo $this->Session->flash('bad'); ?>
					<?php echo $this->fetch('content'); ?>
					</div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Страницы</span>
						<ul class="c_ul">
							<li><a href="/admin/services">Услуги</a></li>
							<li><a href="/admin/blog">Полезная информация</a></li>
							<li><a href="/admin/gallery">Галерея</a></li>
							<li><a href="/admin/news">Новости/Акции</a></li>
							<li><a href="/admin/blocks">Блоки</a></li>
							<li><a href="/admin/reviews">Отзывы</a></li>
						</ul>
					</div>
				</aside>
			</div>
		</section>
		<footer>
			<div class="cr">
				<img src="/img/klinika_plasticheskoj_hirurgii_bejskenov.jpg"/>				
				<div class="f_row f_third">
					<span>© 2015, BEYSKENOV.COM</span>
					<span>Все права защищены.</span>
					<span>Сайт разработан в <a target="_blank" href="http://astanacreative.kz">AstanaCreative.kz</a></span>					
				</div>
			</div>
		</footer>
		</div>
		
	</body>
</html>