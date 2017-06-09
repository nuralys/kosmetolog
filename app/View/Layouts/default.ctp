<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('cake.generic'));

		echo $this->Html->script(array('jquery-2.1.4','ckeditor/ckeditor', 'jquery.min', 'jquery.imgareaselect'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<header>
		<div class="cr">
			<div class="title_admin">
				<a href="/admin">Панель администратора</a> |<a href="/">Сайт</a>
			</div>
		</div>
		<section class="head">
			<div class="cr">
				<div class="logo">
					<a href="/admin">
						<img src="" alt=""/>
					</a>
				</div>
			</div>
		</section>
	</header>
	<div class="cr">
	<?php if($this->request->params['action'] != 'admin_login'): ?>
		<nav class="top_menu_admin">
			<div class="top_menu_item ">
				<a href="/admin/services">Услуги</a>
			</div>
			<div class="top_menu_item ">
				<a href="/admin/pages">Страницы</a>
			</div>
			<div class="top_menu_item ">
				<a href="/admin/reviews">Отзывы</a>
			</div>
			<div class="top_menu_item ">
				<a href="/admin/articles">Статьи</a>
			</div>
			<div class="top_menu_item ">
				<a href="/admin/gallery">Галерея</a>
			</div>
			<div class="top_menu_item ">
				<a href="/admin/questions">Вопросы</a>
			</div>
			
			<div class="top_menu_item ">
				<a href="/admin/contacts/edit/1">Контакты</a>
			</div>
			<div class="top_menu_item ">
				<a href="/admin/users/logout">Выход</a>
			</div>
		</nav>
	<?php endif ?>
		<div <?php 
		if($this->request->params['controller']=='users' && $this->request->params['action']=='admin_login')
		{ echo "class='content_admin2'";}
	else
	{echo "class='content_admin'";}
	?> >
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>