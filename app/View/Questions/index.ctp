<div class="inner">
	<div class="top-up">
			<span class="about-info__heading">
				Вопросы и ответы
			</span>
			<a class="write" href="#">Задать свой вопрос</a>
	</div>
	<ul class="question-ul">
	<?php foreach($data as $item): ?>
		<li class="quest quest--active">
			<div class="quest__heading">
				- <?php echo $item['Question']['title'] ?>
				<span class="fa fa-angle-down"></span>
			</div>
			<div class="quest__info">
				<?php echo $item['Question']['body'] ?>
			</div>
		</li>
		<?php endforeach ?>	
	</ul>
</div>