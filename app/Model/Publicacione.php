<?php
App::uses('AppModel', 'Model');

class Publicacione extends AppModel {

	public $displayField = 'titulo';
	public $actsAs = array(
        'upload.upload' => array(
            'imagen' => array(
            	'fields' => array('dir' => 'dir_imagen' ),                
                'thumbnailSizes' => array(
      				'big' => '200x200',
                    'small' =>'120x120',
                    'thumb' =>'80x80' ),
                'thumbnailMethod'=> 'php'
            				)
        			)
    );
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'publicacione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

?>
