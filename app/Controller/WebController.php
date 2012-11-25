<?php
App::uses('AppController', 'Controller');

class WebController extends AppController {

	public $uses = array('Publicacione','Comentario','Proyecto','Categoria','Usuario','Colaboradore');

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allowedActions = array('*');
    }
    
	public function index(){
		$this->Publicacione->recursive = -1;
		$this->set('publicaciones', $this->Publicacione->find('all',array('limit'=>3,'order'=>'Publicacione.fecha DESC')));
		$this->set('proyectos', $this->Proyecto->find('all',array('limit'=>4,'order'=> 'Proyecto.fecha DESC')));

		$this->Comentario->Behaviors->attach('Containable');
		$this->Comentario->contain('Usuario');
		$this->Comentario->recursive = 0;
		$this->set('comentarios', $this->Comentario->find('all',array('limit'=>3,'order'=>'Comentario.fecha DESC')));
	}

	public function proyectos(){
		$categorias = $this->Categoria->find('list');
		$this->set('proyectos', $this->Proyecto->find('all'));
		$this->set(compact('categorias'));
	}

	public function proyecto_view($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}		
		$proyecto = $this->Proyecto->read(null, $id);
		$id_usuario = $proyecto['Usuario']['id'];
		$this->Usuario->Behaviors->attach('Containable');
		$this->Usuario->contain('Paise');
		$this->Comentario->Behaviors->attach('Containable');
		$this->Comentario->contain('Usuario');
		$comentarios = $this->Comentario->find('all',
						array('conditions'=>array('Comentario.proyecto_id'=>$id)));
		$this->Colaboradore->Behaviors->attach('Containable');
		$this->Colaboradore->contain('Usuario');
		$colaboradores = $this->Colaboradore->find('all',
						array('conditions'=>array('Colaboradore.proyecto_id'=>$id)));
		$this->Colaboradore->recursive = -1;
		$colaboradordelproyecto =$this->Colaboradore->find('all',
						array('conditions'=>array('Colaboradore.proyecto_id'=>$id,'Colaboradore.usuario_id'=>$id_usuario)));

		$this->set('usuario',$this->Usuario->read(null,$id_usuario));
		$this->set(compact('proyecto', 'comentarios','colaboradores','colaboradordelproyecto'));
	}

	public function detalle_usuario($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->Usuario->Behaviors->attach('Containable');
		$this->Usuario->contain('Proyecto','Paise');
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

}

?>	