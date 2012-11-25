<?php
App::uses('AppModel', 'Model');

class Tipousuario extends AppModel {

	public $displayField = 'tipo_usuario';

	public $hasMany = array('Usuario');

}
?>
