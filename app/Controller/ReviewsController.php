<?php

class ReviewsController extends AppController{

	public function admin_index(){
		$data = $this->Review->find('all');
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Review->create();
			$data = $this->request->data['Review'];
			// debug($data);
			
			if($this->Review->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Review->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Review->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Review->id = $id;
			$data1 = $this->request->data['Review'];
			
			if($this->Review->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->Review->exists($id)) {
			throw new NotFounddException('Такого материала нет');
		}
		if($this->Review->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$data = $this->Review->find('all');
		$title_for_layout = 'Отзывы';
		$meta['keywords'] = 'Отзывы';
		$meta['description'] = 'Отзывы наших клиентов';
		$this->set(compact('title_for_layout', 'meta', 'data'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Review->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$post = $this->Review->findById($id);
		$news = $this->Review->find('all', array(
			'fields' => array('id', 'title')
			));
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		
		$title_for_layout = $post['Review']['title'];
		$meta['keywords'] =$post['Review']['keywords'];
		$meta['description'] =$post['Review']['description'];
		$this->set(compact('post', 'news', 'parent_services', 'title_for_layout', 'meta'));
	}
}