<header class="header <?php echo ($this->request->params['action']=='about') ? 'header--second' : '' ?> ">
	<div class="top-header">
		<div class="inner">
			<a class="logo" href="/">
				<img src="/img/logo.png" class="logo__img">
				<div class="logo-info">
					<span class="logo-info__up">
						Ходусова Оксана <span>Александровна</span>
					</span>
					<span class="logo-info__down">
						Врач дерматокосметолог
					</span>
				</div>
			</a>
			<div class="number">+7 707 <span>255 40 20</span></div>
			<ul class="social">
				<li>
					<a class="soc-item fa fa-vk"></a>
				</li>
				<li>
					<a class="soc-item fa fa-facebook"></a>
				</li>
				<li>
					<a class="soc-item fa fa-twitter"></a>
				</li>
				<li>
					<a class="soc-item fa fa-odnoklassniki"></a>
				</li>
				<li>
					<a class="soc-item fa fa-envelope"></a>
				</li>
			</ul>
			<div class="mob-menu"></div>
		</div>
	</div>
	<div class="bot-header">
		<div class="inner">
			<ul class="nav">
				<li>
					<a class="nav-item <?= ($this->params['controller'] == 'main') ? 'nav-item--active' : '' ?>" href="/">
						Главная
					</a>
				</li>
				<li>
					<a class="nav-item <?= ($this->params['action'] == 'about') ? 'nav-item--active' : '' ?>" href="/about">
						О враче
					</a>
				</li>
				<li>
					<a class="nav-item <?= ($this->params['controller'] == 'services') ? 'nav-item--active' : '' ?>" href="/services">
						Услуги
					</a>
				</li>
				<li>
					<a class="nav-item <?= ($this->params['controller'] == 'questions') ? 'nav-item--active' : '' ?>" href="/questions">
						Вопросы
					</a>
				</li>
				<li>
					<a class="nav-item <?= ($this->params['controller'] == 'gallery') ? 'nav-item--active' : '' ?>" href="/gallery">
						Галерея работ
					</a>
				</li>
				<li>
					<a class="nav-item <?= ($this->params['controller'] == 'reviews') ? 'nav-item--active' : '' ?>" href="/reviews">
						Отзывы
					</a>
				</li>
				<li>
					<a class="nav-item <?= ($this->params['controller'] == 'articles') ? 'nav-item--active' : '' ?>" href="/articles">
						Статьи
					</a>
				</li>
				<li>
					<a class="nav-item <?= ($this->params['action'] == 'contacts') ? 'nav-item--active' : '' ?>" href="/contacts">
						Контакты
					</a>
				</li>
			</ul>
			<div class="search">
				<input placeholder="Поиск по сайту" class="search__input" type="search">
				<input class="search__submit fa fa-search" type="submit">
				<span class="ico fa fa-search"></span>
			</div>
		</div>
	</div>
</header>