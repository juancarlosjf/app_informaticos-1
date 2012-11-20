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
}

?>