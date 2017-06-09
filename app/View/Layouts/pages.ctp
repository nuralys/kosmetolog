<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ходусова Оксана Александровна</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="/css/style.css" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<?=$this->element('header')?>
		<main class="main" role="main">
			<div class="section section--grey">
				<?php echo $this->fetch('content'); ?>
			</div>
			<div class="section">
				<div class="inner">
					<div class="slider">
						<div class="slider-item">
							<div class="slider-info">
								<span class="slider-item__type">Акция</span>
								<h4 class="slider-item__heading">
									Мезотеропия Гиалуроновой кислотой 
								</h4>	
								<div class="slider-item__tenge">
								за <span>12 000</span> тенге
								</div>	
								<a class="btn" href="#">
									Узнать подробнее
								</a>
								<div class="slider-item__img"></div>
							</div>
						</div>
					</div>
					<div class="right-cont">
						<div class="wr">
							<span class="right-cont__type">
								Контакты
							</span>
							<span class="right-cont__heading">
								Запись и консультация
							</span>
							<div class="right-cont__number">
								+7 707 <span>255 40 20,</span> +7 707 <span>255 40 20</span>							
							</div>
							<div class="right-cont__number right-cont__number--bot">	
								+7 707 <span>255 40 20 (Whatsapp)</span>
							</div>
							<p>
								Адрес: г. Алматы, ул. Ходжанова 81, блок 3 
                (бывшая Водозаборная), уг. ул. Аль-Фараби 
							</p>
							<p>
								Электронная почта: kseniya_x@inbox.ru  
							</p>
							<p class="bot bot--up">
								Мы работаем ежедневно 
							</p>
							<p class="bot">
								с 10:00 до 19:00
							</p>							
						</div>
					</div>
				</div>
			</div>			
		</main>
		<?php echo $this->element('footer') ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script src="/js/slick.min.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
		  $( function() {
		    $( ".tabs" ).tabs();
		  } );
  	</script>		
	</body>
</html>