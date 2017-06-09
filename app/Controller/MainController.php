<?php

class MainController extends AppController{

	public $uses = array('Main', 'Blog');

	public function index(){
		
		$title_for_layout = 'Пластическая хирургия в Астане. Пластический хирург И. Бейскенов.';
		$meta['keywords'] = 'пластический хирург, пластическая хирургия, пластическая клиника, увеличение груди, пластическая хирургия в астане ';
		$meta['description'] = 'Пластическая хирургия Астана. Основные услуги: увеличение груди, пластика тела и лица. Пластический хирург, новые методики, поможет Вам достичь результатов.';
		$blog = $this->Blog->find('all', array(
			'order' => array('id' => 'desc'),
			'limit' => 3
		));
		$this->set(compact('title_for_layout', 'meta', 'blog'));
	}
}