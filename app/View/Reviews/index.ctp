<div class="inner">
	<div class="top-up">
			<span class="about-info__heading">
				Отзывы клиентов
			</span>
			<a class="write fancybox" href="#review">Оставить отзыв</a>
	</div>
	<ul class="otzyv-ul">
	<?php foreach($data as $item): ?>
		<li>
			<div class="otzyv-up">
				<!-- <img class="otzyv-up__img" src="img/otzyv.png"> -->
				<span class="otzyv-up__text">
					<?php echo $item['Review']['title'] ?>	
				</span>
			</div>	
			<?php echo $item['Review']['body'] ?>							
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
	</ul> -->	
</div>
<div class="modal" id="review" style="display: none;">
		<form>
			<h3 class="modal__heading">Оставить отзыв</h3>
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
						Отзыв:
					</label>
					<textarea class="modal-input__textarea"></textarea>
				</div>
			<input type="submit" value="Отправить" class="btn">
		</form>				
	</div>