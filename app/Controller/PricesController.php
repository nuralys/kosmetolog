<?php 

class PricesController extends AppController{

	public $uses = array('Price', 'Blog' ,'Service');

	public function index(){
		$blog = $this->Blog->find('all');
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		$title_for_layout = 'Прайс лист | цены';
		$meta['keywords'] = 'Прайс лист, цены, Бейскенов Ильяс Саматович, пластический хирург';
		$meta['description'] = 'Прайс лист, цены, Бейскенов Ильяс Саматович, пластический хирург';
		$this->set(compact('blog', 'parent_services', 'title_for_layout', 'meta'));
	}
}