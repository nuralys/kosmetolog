<div class="inner ov">
	<div class="left-part">
		<ul class="left-nav">
		<?php foreach($data as $item): ?>
			<li>
				<a class="active-off" href="/services/view/<?=$item['Service']['id']?>">
					<?=$item['Service']['title']?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>
	</div>	
	<div class="right-part">
		<div class="uslugi-right">
		<span class="right-part__heading">
			Услуги
		</span>
		<span class="uslugi-right__type">
			Выберите услугу
		</span>
			<ul class="uslugi-ul">
			<?php foreach($data as $item): ?>
				<li>
					<a class="uslugi-item" href="/services/view/<?=$item['Service']['id']?>">
						<span><?=$item['Service']['title']?></span>
						<img src="/img/services/thumbs/<?=$item['Service']['img']?>">
					</a>
				</li>
				<?php endforeach ?>																									
			</ul>
		</div>	
	</div>
</div>