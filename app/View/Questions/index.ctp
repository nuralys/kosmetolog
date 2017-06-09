<div class="inner">
	<div class="top-up">
			<span class="about-info__heading">
				Вопросы и ответы
			</span>
			<a class="write fancybox" href="#question">Задать свой вопрос</a>
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
<div class="modal" id="question" style="display: none;">
		<form>
			<h3 class="modal__heading">Задать вопрос</h3>
				<div class="modal-input">
					<label class="modal-input__text">
						Имя:
					</label>
					<input type="text" placeholder="Ваше имя...">
				</div>
				<div class="modal-input">
					<label class="modal-input__text">
						Почта:
					</label>
					<input type="text" placeholder="Почта...">
				</div>
				<div class="modal-input">
					<label class="modal-input__text">
						Сообщение:
					</label>
					<textarea class="modal-input__textarea"></textarea>
				</div>
			<input type="submit" value="Отправить" class="btn">
		</form>				
	</div>