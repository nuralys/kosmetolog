<?php 

class ContactsController extends AppController{

	public $uses = array('Contact', 'Blog' ,'Service');

	public function index(){
		$blog = $this->Blog->find('all');
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		$title_for_layout = 'Контакты';
		$meta['keywords'] = 'Контакты, Бейскенов Ильяс Саматович, пластический хирург';
		$meta['description'] = 'Адрес: г. Астана, ул. Букейхана 8/2 Телефон: +7 (7172) 440 001, +7 701 800 62 66, info@beiskenov.com';
		$this->set(compact('blog', 'parent_services', 'title_for_layout', 'meta'));
	}
}