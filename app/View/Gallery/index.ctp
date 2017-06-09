<div class="inner ov">
	<div class="left-part">
		<span class="left-part__heading">
			Галерея работ
		</span>	
		<ul class="left-nav">
			<li>
				<a <?php if(empty($this->params['pass'])) echo 'class="active"'; ?> href="/gallery">
					Все
				</a>
			</li>
			<?php foreach($services as $item => $value): ?>	
			<li>				
				<a href="/gallery/<?=$item?>" <?php if(!empty($this->params['pass']) && $this->params['pass'][0] == $item) echo 'class="active"'; ?>><?=$value?></a>
			</li>
			<?php endforeach ?>				
		</ul>
	</div>	
	<div class="gallery-right">
		<span class="right-part__heading">
			<?php echo $heading ?>
		</span>
		<ul class="gallery-ul">
			<?php foreach($data as $item): ?>
			<li>
				<a class="gallery-img fancybox" href="/img/galleries/<?=$item['Gallery']['img']?>">
					<img src="/img/galleries/thumbs/<?=$item['Gallery']['img']?>">
				</a>
			</li>
			<?php endforeach ?>																
		</ul>
	</div>
</div>