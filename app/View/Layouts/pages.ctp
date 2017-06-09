<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ходусова Оксана Александровна</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="/css/style.css" rel="stylesheet" type="text/css">	
		<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">	
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
		<script src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="js/jquery.fancybox.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>	
	</body>
</html>