<div class="inner ov">
	<div class="left-part">
		<span class="left-part__heading">
			Услуги
		</span>
		<ul class="left-nav">
		<?php foreach($services as $item): ?>
			<li>
				<a class="active" href="#">
					<?=$item['Service']['title'] ?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>
	</div>	
	<div class="right-part">
		<span class="right-part__heading">
			Новые статьи
		</span>
		<ul class="news-ul">
		<?php foreach($data as $item): ?>
			<li>
				<div class="news-mini">
					<a class="news-mini__img" href="#">
						<img src="/img/articles/thumbs/<?=$item['Article']['img'] ?>">
					</a>
					<div class="news-info">
						<span class="news-info__date"><?php echo $this->Time->format($item['Article']['date'], '%d-%m-%Y', 'invalid'); ?></span>
						<a href="#" class="news-info__heading"><?=$item['Article']['title'] ?></a>
						<p>
							<?= $this->Text->truncate(strip_tags($item['Article']['body']), 70, array('ellipsis' => '...', 'exact' => true)) ?>
						</p>
					</div>
				</div>
			</li>	
			<?php endforeach ?>											
		</ul>
		<!-- <ul class="pagination">
			<li class="active">
				<a href="#">1</a>
			</li>
			<li>
				<a href="#">2</a>
			</li>
			<li>
				<a href="#">3</a>
			</li>
			<li>
				<a href="#">4</a>
			</li>
			<li>
				<a href="#">5</a>
			</li>																														
		</ul>	 -->					
	</div>
</div>
