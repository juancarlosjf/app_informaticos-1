<div>
    <ul class="breadcrumb">
        <li><?php echo $this->Html->link('Panel','');?> <span class="divider">/</span></li>
        <li><?php echo $this->Html->link('Proyectos','/Editores/proyectos');?> <span class="divider">/</span></li>
        <li class="active">Nuevo</li>
    </ul>
</div>

<div class="row-fluid">
	<div class="span12 widget">
		<div class="widget-header">
			<span class="title">
				<i class="icon-tag"></i>
				Información del Proyecto
			</span>
		</div>
			<div class="widget-content form-container">
				<div>
					<?php echo $this->Form->create('Proyecto',array('url'=>'/Editores/proyecto_add','class'=>'form-horizontal','type' => 'file'));?>
					<?php
						echo $this->Form->input('titulo',array('label'=>'Titulo','required','class'=>'span11','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>')); 
						echo $this->Form->input('categoria_id',array('label'=>'Categoría','required','class'=>'span6','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>'));	
						echo $this->Form->input('descripcion',array('label'=>'Describe tu proyecto','required','class'=>'span11','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>','id'=>'editor'));
						echo $this->Form->input('pagina_web',array('label'=>'Links que tengas relacionados con el proyecto','class'=>'span11','rows'=>'3','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>'));
						echo $this->Form->input('imagen',array('label'=>'Subir imagen', 'type'=>'file','class'=>'span11','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>')); 
						echo '<div class="form-actions">';
						echo $this->Form->input('dir_imagen', array('type' => 'hidden'));
						echo $this->Form->input('usuario_id', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.id')));

						echo $this->Form->button('Guardar',array('type'=>'submit','class'=>'btn btn-primary'));	
						echo $this->Form->button('Reestablecer',array('type'=>'reset','class'=>'btn btn-info'));
						echo '</div>';
						echo 'AQUII'. $this->Session->read('Auth.User.id');
						echo $this->Form->end();
					?>
				</div>	
			</div>
	</div>
</div>

<script type="text/javascript" charset="utf-8">
	$().ready(function() {
		var opts = {
			cssClass : 'el-rte',
			lang     : 'es',
			height   : 200,
			toolbar  : 'normal',
		}
		$('#editor').elrte(opts);
	})
</script>