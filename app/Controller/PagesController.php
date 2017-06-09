<?php

// App::uses('AppController', 'Controller');

class PagesController extends AppController {

	// public $uses = array('Page');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index($page_alias = null){
		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		// debug($page_alias);
		$page = $this->Page->findByAlias($page_alias);
		// debug($page);
		// if(!$page){
		// 	throw new NotFoundException("Такой страницы нету");
		// }
		
		//$blog = $this->Blog->find('all');
		$body = $page['Page']['body'];
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta', 'body'));
	}

	public function about(){
		$page = $this->Page->findByAlias('about');
		$body = $page['Page']['body'];
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta', 'body'));
	}

	public function dealers(){
		$page = $this->Page->findByAlias('dealers');
		$body = $page['Page']['body'];
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta', 'body'));
	}

	public function contacts(){
		$page = $this->Page->findByAlias('contacts');
		$body = $page['Page']['body'];
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta', 'body'));
	}

	public function admin_edit($page_id){
		
		$page = $this->Page->findById($page_id);
		if(!$page_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Page->id = $page_id;
			if($this->Page->save($this->request->data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $page;
			
			$this->set(compact('page_id', 'page'));
		}
	}
}
