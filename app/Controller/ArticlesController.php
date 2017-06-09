<?php

class ArticlesController extends AppController{

	public $uses = array('Article', 'Service');

	public function admin_index(){
		$data = $this->Article->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Article->create();
			$data = $this->request->data['Article'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Article->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Article->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Article->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Article->id = $id;
			$data1 = $this->request->data['Article'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Article->save($data1)){
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
		if (!$this->Article->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Article->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$data = $this->Article->find('all',array(
			'order' => array('date' => 'desc')
			));
		$services = $this->Service->find('all');
		$title_for_layout = 'Статьи';
		$meta['keywords'] = 'Статьи, новости';
		$meta['description'] = 'Статьи из мира медицины, а также акции и события хирургии';
		$this->set(compact('data', 'title_for_layout', 'meta','services'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Article->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$post = $this->Article->findById($id);
		$news = $this->Article->find('all', array(
			'fields' => array('id', 'title')
			));
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		
		$title_for_layout = $post['Article']['title'];
		$meta['keywords'] =$post['Article']['keywords'];
		$meta['description'] =$post['Article']['description'];
		$this->set(compact('post', 'news', 'parent_services', 'title_for_layout', 'meta'));
	}
}