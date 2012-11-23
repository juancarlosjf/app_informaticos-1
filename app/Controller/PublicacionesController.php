<?php
App::uses('AppController', 'Controller');
/**
 * Publicaciones Controller
 *
 * @property Publicacione $Publicacione
 */
class PublicacionesController extends AppController {

	public function publicaciones() {
		$this->Publicacione->recursive = 0;
		$this->set('publicaciones', $this->paginate());
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
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Publicacione->Categorium->find('list');
		$usuarios = $this->Publicacione->Usuario->find('list');
		$this->set(compact('categorias', 'usuarios'));
	}

	public function publicacion_edit($id = null) {
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Publicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Publicacione->read(null, $id);
		}
		$categorias = $this->Publicacione->Categorium->find('list');
		$usuarios = $this->Publicacione->Usuario->find('list');
		$this->set(compact('categorias', 'usuarios'));
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
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Publicacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
