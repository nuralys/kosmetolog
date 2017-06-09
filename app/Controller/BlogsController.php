<?php 

class BlogsController extends AppController{

	public $uses = array('Blog', 'News', 'Service');

	public function admin_index(){
		$blogs = $this->Blog->find('all');
		
		$this->set(compact('blogs'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Blog->create();
			$data = $this->request->data['Blog'];
			if(!$data['img']['name']){
				unset($data['img']);
			}
			if($this->Blog->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Blog->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Blog->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Blog->id = $id;
			$data1 = $this->request->data['Blog'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Blog->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				debug($this->request->data1);
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
		if (!$this->Blog->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Blog->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$blogs = $this->Blog->find('all', 
			array(
				'order' => array('created' => 'desc')));
		$news = $this->News->find('all', array(
			'fields' => array('id', 'title')
			));
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		$title_for_layout = 'Полезная информация';
		$this->set(compact('blogs', 'news', 'parent_services', 'title_for_layout'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Blog->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$post = $this->Blog->findById($id);
		$blog = $this->Blog->find('all', array(
			'fields' => array('id', 'title')
			));
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		// debug($post);
		$title_for_layout = $post['Blog']['title'];
		// $meta['keywords'] = $post['Blog']['keywords'];
		// $meta['description'] = $post['Blog']['description'];
		$this->set(compact('post', 'blog', 'parent_services', 'title_for_layout', 'meta'));
	}
}