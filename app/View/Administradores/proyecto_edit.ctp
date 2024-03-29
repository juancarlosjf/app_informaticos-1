<div>
    <ul class="breadcrumb">
        <li><?php echo $this->Html->link('Panel','');?> <span class="divider">/</span></li>
        <li><?php echo $this->Html->link('Proyectos','/Editores/proyectos');?> <span class="divider">/</span></li>
        <li class="active">Editando</li>
    </ul>
</div>

<div class="row-fluid">
	<div class="span12 widget">
		<div class="widget-header">
			<span class="title">
				<i class="icon-tag"></i>
				Editar Proyecto
			</span>
		</div>
			<div class="widget-content form-container">
				<div>
					<?php echo $this->Form->create('Proyecto',array('url'=>'/Editores/proyecto_edit/'.$this->request->data['Proyecto']['id'].'','class'=>'form-horizontal'));?>
					<?php
						echo $this->Form->input('titulo',array('label'=>'Titulo','required','class'=>'span11','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>')); 
						echo $this->Form->input('categoria_id',array('label'=>'Categoría','required','class'=>'span6','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>'));	
						echo $this->Form->input('pagina_web',array('label'=>'Pagina Web','class'=>'span6','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>'));
						
						echo $this->Form->input('descripcion',array('label'=>'Descripcion','required','class'=>'span11','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>'));

						echo '<div class="form-actions">';
						echo $this->Form->button('Guardar',array('type'=>'submit','class'=>'btn btn-primary'));	
						echo $this->Form->button('Reestablecer',array('type'=>'reset','class'=>'btn btn-info'));
						echo '</div>';
						echo $this->Form->end();
					?>	
				</div>	
			</div>
	</div>
</div>