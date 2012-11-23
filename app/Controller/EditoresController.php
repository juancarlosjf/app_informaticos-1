<?php
App::uses('AppController', 'Controller');

class EditoresController extends AppController {

	public $uses = array('Usuario','Publicacione');

	public function beforeFilter() {    
		$this->layout = 'cpanel';     
		$this->Auth->allowedActions = array('*');
	}
	
	public function home(){

	}

	public function perfil(){
		$id_usuario = $this->Auth->user('id');
		$this->Usuario->id = $id_usuario;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Usuario']['password'] = $this->request->data['Usuario']['password_new'];
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved'));
				$this->redirect(array('action' => 'home'));
			} 
			else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		}
		else {
			$this->request->data = $this->Usuario->read(null, $id_usuario);
		}
		$paises = $this->Usuario->Paise->find('list');
		$this->set(compact('paises'));
		
	}

	public function edit($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved'));
				$this->redirect(array('action' => 'index'));
			} 
			else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		} 
		else {
			$this->request->data = $this->Usuario->read(null, $id);
		}
		$paises = $this->Usuario->Paise->find('list');
		$this->set(compact('paises'));
	}
}

?>	