<?php
App::uses('AppController', 'Controller');

class AdministradoresController extends AppController {

	public $uses = array('Usuario','Proyecto','Publicacione','Categoria','Tipousuario');

	public function beforeFilter() {    
		$this->layout = 'admin';     
		$this->Auth->allowedActions = array('*');
	}
	
	public function home(){

	}

	public function usuarios(){
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->Usuario->find('all'));
	}

	public function perfil(){
		$id_usuario = $this->Auth->user('id');
		$this->Usuario->id = $id_usuario;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('El usuario no es valido'));
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

//Gestión de Proyectos
/**********************************************************************************/
	public function proyectos() {
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->Proyecto->find('all'));
	}

	public function verproyecto($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$this->set('proyecto', $this->Proyecto->read(null, $id));
	}

	public function aprobarpy($id = null,$estado = null ) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}

		if($estado == 1 ) {$juego=0;} else {$juego=1;}
		$this->request->data['Proyecto']['estado']=$juego;
		$this->Proyecto->save($this->request->data);
		$this->Session->setFlash(__('El estado del proyecto :'.$this->request->data['Proyecto']['id']. 'se cambio al estado: '. $this->request->data['Proyecto']['estado'] ));
		$this->redirect(array('action' => 'proyectos'));
	}

	public function proyecto_add() {
		if ($this->request->is('post')) {
			$this->request->data['Proyecto']['fecha']=$this->fecha_hora();
			$this->request->data['Proyecto']['usuario_id']=$this->Auth->user('id');
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved'));
				$this->redirect(array('action' => 'proyectos'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Proyecto->Categoria->find('list');
		$this->set(compact('categorias'));
	}

	public function proyecto_edit($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved'));
				$this->redirect(array('action' => 'proyectos'));
			} 
			else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		} 
		else {
			$this->request->data = $this->Proyecto->read(null, $id);
		}
		
		$categorias = $this->Categoria->find('list');
		$this->set(compact('categorias'));
	}

	public function proyecto_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('Proyecto deleted'));
			$this->redirect(array('action' => 'proyectos'));
		}
		$this->Session->setFlash(__('Proyecto was not deleted'));
		$this->redirect(array('action' => 'proyectos'));
	}

//Gestión de Proyectos
/**********************************************************************************/

//Gestión de Usuarios
/**********************************************************************************/

	public function aprobarusu($id = null,$estado = null ) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}

		if($estado == 1 ) {$juego=0;} else {$juego=1;}
		$this->request->data['Usuario']['estado']=$juego;
		$this->Usuario->save($this->request->data);
		$this->Session->setFlash(__('El estado del usuario :'.$this->request->data['Usuario']['id']. 'se cambio al estado: '. $this->request->data['Usuario']['estado'] ));
		$this->redirect(array('action' => 'usuarios'));
	}

	public function agregarusuario() {
		if ($this->request->is('post')) {
			$this->request->data['Usuario']['fecha']=$this->fecha_hora();
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario se guardo exitosamente'));
				$this->redirect(array('action' => 'usuarios'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		}
		$tipousuarios = $this->Usuario->Tipousuario->find('list');
		$this->set(compact('tipousuarios'));
	}

	public function editarusuario($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved'));
				$this->redirect(array('action' => 'usuarios'));
			} 
			else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		} 
		else {
			$this->request->data = $this->Usuario->read(null, $id);
		}
		
		$tipousuarios = $this->Usuario->Tipousuario->find('list');
		$this->set(compact('tipousuarios'));
	}

	public function eliminarusuario($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Usuario deleted'));
			$this->redirect(array('action' => 'usuarios'));
		}
		$this->Session->setFlash(__('Proyecto was not deleted'));
		$this->redirect(array('action' => 'usuarios'));
	}

//Gestión de Usuarios
/**********************************************************************************/



	/*********************Gestion de publicaciones ***********/
	public function apruebapublicacion() {
		$this->Publicacione->recursive = 0;
		$this->set('publicaciones', $this->Publicacione->find('all'));
	}

	public function publicacion_view($id = null) {
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		$this->set('publicacione', $this->Publicacione->read(null, $id));
	}

	public function publicacion_add() {
		if ($this->request->is('post')) {
			$this->Publicacione->create();
			if ($this->Publicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacione has been saved'));
				$this->redirect(array('action' => 'publicaciones'));
			} else {
				$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Publicacione->Categorium->find('list');
		$this->set(compact('categorias'));
	}

	public function publicacion_edit($id = null) {
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Publicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacione has been saved'));
				$this->redirect(array('action' => 'publicaciones'));
			} 
			else {
				$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
			}
		} 
		else {
			$this->request->data = $this->Publicacione->read(null, $id);
		}
		$categorias = $this->Publicacione->Categorium->find('list');
		$this->set(compact('categorias'));
	}

	public function publicacion_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		if ($this->Publicacione->delete()) {
			$this->Session->setFlash(__('Publicacione deleted'));
			$this->redirect(array('action' => 'publicaciones'));
		}
		$this->Session->setFlash(__('Publicacione was not deleted'));
		$this->redirect(array('action' => 'publicaciones'));
	}
}

?>	