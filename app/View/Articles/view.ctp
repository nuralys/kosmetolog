<div class="container">
	<div class="cr">
		<div class="category-list__title">
			<h1>
					<?=$post['News']['title']?>
			</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/blogs">Полезная информация</a></li>
				<li><?=$post['News']['title']?></li>
			</ul>
		</div>
		<div class="content">
			
			
			<div class="second-page-img">
				<img src="/img/news/<?=$post['News']['img']?>" alt="<?=$post['News']['title']?>">
			</div>
			<?=$post['News']['body']?>
			
			
		</div>
	</div>
</div>