<?php

class QuestionsController extends AppController{
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index(){
		$data = $this->Question->find('all', array(
			'order' => array('Question.id' => 'desc')
		));
		$title_for_layout = __('Вопросы - Ответы');
		$this->set(compact('title_for_layout', 'data'));
	}

	public function admin_index(){
		$data = $this->Question->find('all');
		$title_for_layout = "Вопросы - Ответы";
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Question->create();
			$data = $this->request->data['Question'];
			if($this->Question->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			// $this->Question->Category->locale = 'ru';
			// $categories = $this->Question->Category->find('list');
			// $this->set(compact('categories'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Question->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Question->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Question->id = $id;
			$data1 = $this->request->data['Question'];
			
			$data1['id'] = $id;
			
			if($this->Question->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if($this->request->is('post')){
			$this->request->data = $data1;
			$data = $data1;
		}else{
			$data = $this->request->data = $this->Question->read(null, $id);
		}
			
			$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		if (!$this->Question->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Question->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		// if(is_null($id) || !(int)$id || !$this->Question->exists($id)){
		// 	throw new NotFoundException('Такой страницы нет...');
		// }
		
		$data = $this->Question->findById($id);
	// $aside = $this->Question->Category->find('all');
		$title_for_layout = $data['Question']['title'];
		$meta['keywords'] = $data['Question']['keywords'];
		$meta['description'] = $data['Question']['description'];
		$this->set(compact('data', '','title_for_layout' ,'meta'));
	}

}