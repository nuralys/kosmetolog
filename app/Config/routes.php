<?php
	// Router::connectNamed(array('lang'));
	Router::redirect('/index.php', '/', array('status' => 301));
	Router::connect('/about', array('controller' => 'pages', 'action' => 'about'));
	Router::connect('/services', array('controller' => 'services', 'action' => 'index'));
	Router::connect('/gallery/*', array('controller' => 'gallery', 'action' => 'index'));
	Router::connect('/questions', array('controller' => 'questions', 'action' => 'index'));
	Router::connect('/contacts', array('controller' => 'pages', 'action' => 'contacts'));
	// Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'index'));
	
	
	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin/blog', array('controller' => 'blogs','admin' => true));
	Router::connect('/admin/blog/:action/*', array('controller' => 'blogs','admin' => true));
	Router::connect('/admin/service/:action/*', array('controller' => 'services', 'admin' => true));
	Router::connect('/admin', array('controller' => 'services', 'action' => 'index', 'admin' => true));

	Router::connect('/', array('controller' => 'main', 'action' => 'index'));
	// Router::connect('/page', array('controller' => 'pages', 'action' => 'index'));
	// Router::connect('/page', array('controller' => 'pages', 'action' => 'index'));

	// Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	// Router::connect('/news/*', array('controller' => 'news', 'action' => 'view'));
	// Router::connect('/price/*', array('controller' => 'prices', 'action' => 'index'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
